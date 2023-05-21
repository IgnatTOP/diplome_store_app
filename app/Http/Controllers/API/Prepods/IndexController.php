<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Prepods;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       return Prepods::all();
   }
}
