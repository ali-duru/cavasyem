<?php

namespace App\Http\Controllers;

use App\Models\HumanResource;
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    public function index()
    {
        return view('frontend.human-resource');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'tc' => 'required',
            'birth_place' => 'required|string',
            'birth_date' => 'required|string',
            'phone' => 'required',
            'address' => 'required|string',
            'sex' => 'required|string',
            'status' => 'required',
            'driver' => 'required',
            'languages' => 'required|string',
            'worked' => 'required|string',
            'references' => 'required|string',
            'email' => 'required|email',
        ]);

        $resource = new HumanResource();
        $resource->name = $request->input('name');
        $resource->tc = $request->input('tc');
        $resource->birth_place = $request->input('birth_place');
        $resource->birth_date = $request->input('birth_date');
        $resource->email = $request->input('email');
        $resource->phone = $request->input('phone');
        $resource->address = $request->input('address');
        $resource->sex = $request->input('sex');
        $resource->status = $request->input('status');
        $resource->driver = $request->input('driver');
        $resource->health_problem = $request->input('health_problem');
        $resource->travel_problem = $request->input('travel_problem');
        $resource->languages = $request->input('languages');
        $resource->worked = $request->input('worked');
        $resource->references = $request->input('references');
        $resource->message = $request->input('message');
        $resource->save();
        dd($resource);
        return redirect()->route('human.resource.index')->with(['message', 'Mesajınız Başarıyla Gönderildi!']);
    }
}
