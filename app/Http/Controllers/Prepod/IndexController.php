<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Models\Prepods;


class IndexController extends Controller
{
   public function __invoke()
   {
       $prepod = Prepods::all();
       return view('prepod.index', compact('prepod'));
   }
}
