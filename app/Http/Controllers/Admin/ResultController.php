<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResultModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Imports\ResultsBulkImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Matrix\Exception;
use Symfony\Component\HttpKernel\Log;

class ResultController extends Controller
{
    public  function add()
    {
        return view('Admin/add-result');
    }

    public function uploadExcel()
    {
        return view('Admin.upload-excel');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new ResultsBulkImport, $request->file('file'));

        return redirect()->back()->with('success', 'Results imported successfully!');
    }

    public function storeData(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'date' => 'required|date',
            'time_slot' => 'required|string',
            'sangam' => 'required|string',
            'chetak' => 'required|string',
            'super' => 'required|string',
            'mp_delux' => 'required|string',
            'bhagya_rekha' => 'required|string',
            'diamond' => 'required|string',
        ]);
        if ($validated->fails()) {
            return back()->withErrors($validated)->withInput();
        }
    try{
        ResultModel::create([
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'sangam' => $request->sangam,
            'chetak' => $request->chetak,
            'super' => $request->super,
            'mp_delux' => $request->mp_delux,
            'bhagya_rekha' => $request->bhagya_rekha,
            'diamond' => $request->diamond,
        ]);

        return redirect()->back()->with('success', 'Result added successfully!');

    }catch (Exception $e)
    {
        \Log::error('Error inserting lottery result: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong while saving the result.');
    }


    }

    public function viewData(Request $request)
    {
        $selectedDate = $request->input('date', now()->toDateString());

        $results = ResultModel::where('date', $selectedDate)
            ->orderBy('time_slot')
            ->get();
        return view('Admin.view-result', compact('results','selectedDate'));
    }
}
