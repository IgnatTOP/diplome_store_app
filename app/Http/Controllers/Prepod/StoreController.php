<?php

namespace App\Http\Controllers\Prepod;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prepods\StoreRequest;
use App\Models\Prepods;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('images', $data['preview_image']);
        Prepods::firstOrCreate([
            'name' => $data['name']
        ], $data);
        return redirect()->route('prepod.index');

    }
}
