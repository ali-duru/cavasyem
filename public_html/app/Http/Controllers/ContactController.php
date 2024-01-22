<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Complaint;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('contact.index')->with(['message', 'Mesajınız Başarıyla Gönderildi!']);
    }
	
	public function complaint()
    {
        return view('frontend.complaint');
    }
	
	public function complaintStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
			'email' => 'required|email',
			'phone' => 'required',
            'location' => 'required|email',
            'body' => 'required|string',
        ]);

        $contact = new Complaint();
        $contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->phone = $request->input('phone');
        $contact->location = $request->input('location');
        $contact->body = $request->input('body');
        $contact->save();
        return redirect()->route('complaint.index')->with(['message', 'Mesajınız Başarıyla Gönderildi!']);
    }
}
