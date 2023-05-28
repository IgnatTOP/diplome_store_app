<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Models\Prepods;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Prepods $prepod)
    {
        return view('prepod.show', compact('prepod'));

    }
}
