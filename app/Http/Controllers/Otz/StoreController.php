<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('images', $data['preview_image']);
        Category::firstOrCreate($data);
        return redirect()->route('category.index');

    }
}
