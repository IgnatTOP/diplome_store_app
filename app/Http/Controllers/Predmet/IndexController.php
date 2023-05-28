<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Models\predmet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       $predmets = predmet::all();
       return view('predmet.index', compact('predmets'));
   }
}
