<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\predmet;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(predmet $predmet)
    {
        return view('predmet.edit', compact('predmet'));

    }
}
