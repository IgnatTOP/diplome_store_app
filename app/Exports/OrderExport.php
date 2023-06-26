<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }
    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'FIO',
            'Email',
            'Comment',
            'Number',
            'Created At',
            'Updated At',
        ];
    }
}
