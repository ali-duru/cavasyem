<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function show(Privacy $privacy)
    {
        return view('frontend.page.show', compact('privacy'));
    } 
}
