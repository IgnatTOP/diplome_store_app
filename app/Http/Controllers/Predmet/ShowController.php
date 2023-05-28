<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\predmet;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(predmet $predmet)
    {
        return view('predmet.show', compact('predmet'));

    }
}
