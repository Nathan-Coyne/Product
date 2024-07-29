<?php

namespace app\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function index(Request $request)
    {
        return response()->json(Category::all()->toArray());
    }

    public function show(int $id)
    {
        return response()->json([Category::find($id)->toArray()]);
    }
}
