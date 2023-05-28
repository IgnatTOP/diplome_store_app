<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Http\Requests\predmet\UpdateRequest;
use App\Models\predmet;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, predmet $predmet)
    {
        $data = $request->validated();
        $predmet->update($data);
        return view('predmet.show', compact('predmet'));

    }
}
