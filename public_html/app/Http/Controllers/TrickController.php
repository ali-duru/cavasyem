<?php

namespace App\Http\Controllers;

use App\Models\Trick;
use Illuminate\Http\Request;

class TrickController extends Controller
{
    public function show(Trick $trick)
    {
        return view('frontend.trick.show', compact('trick'));
    }
}
