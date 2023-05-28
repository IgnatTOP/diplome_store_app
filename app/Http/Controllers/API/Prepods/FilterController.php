<?php

namespace App\Http\Controllers\API\Prepods;

use App\Http\Controllers\Controller;
use App\Models\predmet;
use App\Models\Prepods;

class FilterController extends Controller
{
   public function __invoke()
   {
       return predmet::all();
   }
}
