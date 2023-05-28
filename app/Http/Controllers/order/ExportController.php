<?php
namespace App\Http\Controllers\order;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExport;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new OrderExport, 'Orders.xlsx');
    }
}
