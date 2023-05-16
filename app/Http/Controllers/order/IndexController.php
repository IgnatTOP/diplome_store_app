<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
   public function __invoke()
   {
       $orders = Order::all();
       return view('order.index', compact('orders'));
   }

}
