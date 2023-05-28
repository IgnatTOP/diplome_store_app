<?php

namespace App\Http\Controllers\API\orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
   {
       $token = $request->input('recaptcha_response');
       $url = "https://www.google.com/recaptcha/api/siteverify";
       $data = [
           'secret' => env('RECAPTCHA_SECRET_KEY'),
           'response' => $token
       ];
       $options = [
           'http' => [
               'header'  => 'Content-type: application/x-www-form-urlencoded',
               'method'  => 'POST',
               'content' => http_build_query($data),
           ],
       ];
       $context  = stream_context_create($options);
       $result = file_get_contents($url, false, $context);
       $response = json_decode($result);
       if (!$response->success) {
           // если тест не прошел, отправляем ошибку
           return response()->json(['error' => 'reCAPTCHA test failed'], 422);
       } else {
           // если тест прошел успешно, обрабатываем данные формы
           // код обработки данных формы здесь
           $data = $request->validated();
           $order = Order::create([
               'FIO' => $data['FIO'],
               'email' => $data['email'],
               'coment' => $data['coment'],
               'number' => $data['number'],
           ]);
           return new OrderResource($order);

       }

   }

}
