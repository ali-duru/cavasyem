<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {

        $search_category = $request->input('category') ?? null;

        $product_count = Product::count();

        $products_query = Product::when($search_category, function ($query) use ($search_category) {
            $query->where('category_id', Category::where('slug', $search_category)->first()->id);
        })->orderBy('order');

        $products = $products_query->paginate(6);

        return view('frontend.product.index', compact('products', 'search_category', 'product_count'));
    }

    public function show(Product $product)
    {
        $f_products = Product::latest()->where('id', '!=', $product->id)->where('category_id', '=', $product->category->id)->take(3)->get();
        return view('frontend.product.show', compact('product', 'f_products'));
    }
}
