<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Current;

class BookingController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);

        Clients::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest_list' => $request->guest_list,
            'check_in' => $request->check_in,
            'check_out'=> $request->check_out,
            'subject' =>$request->subject
        ]);
        
        return redirect()->route('display')->with('success', 'Booked Successfully! We will get back to you within 24hrs');
 }


    //...............................................................
    public function shift(Clients $client){

        $client =Clients::get();

       foreach($client as $key => $value)   {
        $id = $value->id;
        Clients::destroy($id);
        Current::create([
            'name' => $value->name,
            'phone' => $value->phone,
            'guest_list' => $value->guest_list,
            'guest_list' => $value->guest_list,
            'check_in' => $value->null,
            'check_out' => $value->null,
            'room' => $value->null,
            'items' => $value->null,

        ]);
             

        return redirect()->route('book.index') ->with('message', 'Done.');
       }

       
    }
    
    public function index()
    {
        $current = Current::paginate();
        return view('clients.current', compact('current'));
    }
     

}
