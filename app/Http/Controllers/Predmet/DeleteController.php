<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Models\predmet;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(predmet $predmet)
    {
        $predmet->delete();
        return redirect()->route('predmet.index');
    }
}
