<?php

namespace App\Http\Controllers;

use App\Models\All;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function index()
    {
        $contacts = Contact::paginate();
        return view('contacts.index', compact('contacts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>$request->message
        ]);
        
        return redirect()->route('display')->with('success', 'Thank you for contacting us. We will get back to u within 24hrs ');
 }

 public function read(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }
 
}
