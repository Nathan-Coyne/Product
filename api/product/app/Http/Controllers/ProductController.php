<?php

namespace App\Http\Controllers;

use app\Models\Category;
use app\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Product::all()->skip($request['offset'] ?? 0)
            ->take($limit ?? 10)->toArray());
    }

    public function show(int $id)
    {
        return response()->json([Product::find($id)->toArray()]);
    }

    public function showBySubCategoryId(int $subCategoryId)
    {
        return response()->json(Product::where('sub_category_id', $subCategoryId)->get()->toArray());
    }

    public function showByCategoryId(int $categoryId, Request $request)
    {
        $request = $request->all();

        $category = Category::with('subCategories')->find($categoryId);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $subCategoryIds = $category->subCategories->pluck('id');

        $products = Product::whereIn('sub_category_id', $subCategoryIds)
            ->skip($request['offset'] ?? 0)
            ->take($limit ?? 10)
            ->get();

        return response()->json($products);
    }
}
