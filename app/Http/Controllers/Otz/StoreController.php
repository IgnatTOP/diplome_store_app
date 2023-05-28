<?php

namespace App\Http\Controllers\Otz;

use App\Http\Controllers\Controller;
use App\Http\Requests\Otz\StoreRequest;
use App\Models\Otz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('images', $data['preview_image']);
        Otz::firstOrCreate($data);
        return redirect()->route('otz.index');

    }
}
