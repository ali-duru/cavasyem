<?php

namespace App\Http\Controllers\Corporate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        return view('frontend.corporate.lab');
    }
}
