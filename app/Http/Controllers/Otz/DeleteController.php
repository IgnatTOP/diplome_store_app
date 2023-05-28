<?php

namespace App\Http\Controllers\Otz;

use App\Http\Controllers\Controller;
use App\Models\Otz;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Otz $otz)
    {
        $otz->delete();
        return redirect()->route('otz.index');
    }
}
