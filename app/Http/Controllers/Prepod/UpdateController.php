<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prepods\UpdateRequest;
use App\Models\Prepods;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Prepods $prepod)
    {
        $data = $request->validated();
        $prepod->update($data);
        return view('prepod.show', compact('prepod'));

    }
}
