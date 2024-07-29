<?php

namespace App\Http\Controllers;

use app\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Product::all()->toArray());
    }

    public function show(int $id)
    {
        return response()->json([Product::find($id)->toArray()]);
    }

    public function showBySubCategoryId(int $subCategoryId)
    {
        return response()->json(Product::where('sub_category_id', $subCategoryId)->get()->toArray());
    }
}
