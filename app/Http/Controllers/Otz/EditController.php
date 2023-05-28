<?php

namespace App\Http\Controllers\Otz;

use App\Http\Controllers\Controller;
use App\Models\Otz;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Otz $otz)
    {
        return view('otz.edit', compact('otz'));

    }
}
