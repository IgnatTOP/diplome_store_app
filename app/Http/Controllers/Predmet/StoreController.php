<?php

namespace App\Http\Controllers\Predmet;

use App\Http\Controllers\Controller;
use App\Http\Requests\predmet\StoreRequest;
use App\Models\predmet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        predmet::firstOrCreate($data);
        return redirect()->route('predmet.index');

    }
}
