<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Models\Prepods;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Prepods $prepod)
    {
        $prepod->delete();
        return redirect()->route('prepod.index');
    }
}
