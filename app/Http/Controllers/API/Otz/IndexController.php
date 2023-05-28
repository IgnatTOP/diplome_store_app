<?php

namespace App\Http\Controllers\API\Otz;

use App\Http\Controllers\Controller;
use App\Models\Otz;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       return Otz::all();
   }
}
