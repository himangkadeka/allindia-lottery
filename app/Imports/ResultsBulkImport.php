<?php

namespace App\Imports;

use App\Models\ResultModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ResultsBulkImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $index => $row) {
            if ($index === 0) continue; // Skip header row

            ResultModel::updateOrCreate(
                [
                    'date' => $row[0],
                    'time_slot' => $row[1],
                ],
                [
                    'sangam' => $row[2],
                    'chetak' => $row[3],
                    'super' => $row[4],
                    'mp_delux' => $row[5],
                    'bhagya_rekha' => $row[6],
                    'diamond' => $row[7],
                ]
            );
        }
    }
}
