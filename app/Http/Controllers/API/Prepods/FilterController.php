<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\predmet;
use App\Models\Product;

class FilterController extends Controller
{
   public function __invoke(predmet $product)
   {
       $predmet = predmet::all();
       $result = [
           'predmet' => $predmet,
       ];

        return response()->json($result);
   }
}
