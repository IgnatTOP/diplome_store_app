<?php

namespace App\Http\Controllers\API\orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {

    $data = $request->validated();

    $order = Order::create([
        'FIO' => $data['FIO'],
        'email' => $data['email'],
        'coment' => $data['coment'],
    ]);
    return new OrderResource($order);
   }
}
