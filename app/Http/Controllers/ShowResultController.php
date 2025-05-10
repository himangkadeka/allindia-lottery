<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultModel;

class ShowResultController extends Controller
{
    public function viewResultData(Request $request)
    {
        $selectedDate = $request->input('date', now()->toDateString());

        $results = ResultModel::where('date', $selectedDate)
            ->orderBy('time_slot')
            ->get();
        return view('result', compact('results','selectedDate'));
    }
}
