<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Models\Prepods;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\predmet;

class EditController extends Controller
{
    public function __invoke(Prepods $prepod)
    {
        $predmets = predmet::all();

        return view('prepod.edit', compact(['prepod', 'predmets']));

    }
}
