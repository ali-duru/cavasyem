<?php

namespace App\Http\Controllers;

use App\Models\FoodReferance;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = FoodReferance::all();
        return view('frontend.food.index', compact('foods'));
    }

    public function show(FoodReferance $food)
    {
        return view('frontend.food.show', compact('food'));
    }
}
