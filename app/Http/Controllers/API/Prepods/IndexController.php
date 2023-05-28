<?php

namespace App\Http\Controllers\API\Prepods;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Prepods;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       return Prepods::all();
   }
}
