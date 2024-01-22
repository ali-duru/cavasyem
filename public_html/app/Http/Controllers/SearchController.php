<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function get(Request $request)
    {
        $query = strip_tags($request->input('q'));
        $products = Product::where('name', 'LIKE', '%'.$query.'%')->orderBy('order')->paginate(12);
        return view('frontend.search', compact('products'));
    }
}
