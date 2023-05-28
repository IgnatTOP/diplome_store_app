<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Models\predmet;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $predmets = predmet::all();
        return view('prepod.create', compact('predmets'));
    }
}
