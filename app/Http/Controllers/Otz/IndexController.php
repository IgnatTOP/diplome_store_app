<?php

namespace App\Http\Controllers\Otz;

use App\Http\Controllers\Controller;
use App\Models\Otz;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       $otz = Otz::all();
       return view('otz.index', compact('otz'));
   }
}
