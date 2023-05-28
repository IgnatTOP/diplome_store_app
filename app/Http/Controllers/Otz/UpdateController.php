<?php

namespace App\Http\Controllers\Otz;

use App\Http\Controllers\Controller;
use App\Http\Requests\Otz\UpdateRequest;
use App\Models\Otz;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Otz $otz)
    {
        $data = $request->validated();
        $otz->update($data);
        return view('otz.show', compact('otz'));

    }
}
