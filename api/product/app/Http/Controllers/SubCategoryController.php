<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController
{
    public function index(Request $request)
    {
        return response()->json(SubCategory::all()->toArray());
    }

    public function show(int $id)
    {
        return response()->json([SubCategory::find($id)->toArray()]);
    }

    public function showByCategoryId(int $categoryId)
    {
        return response()->json(SubCategory::where('category_id', $categoryId)->get()->toArray());
    }
}
