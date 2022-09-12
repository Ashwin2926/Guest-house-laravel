<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
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

        clients::create([
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
    public function shift(clients $client){

        $client =clients::get();
        $date=" ";
        $date1=" ";
        $room1="";
        $item1="";
       foreach($client as $key => $value)   {
        $id = $value->id;
        clients::destroy($id);
        Current::create([
            'name' => $value->name,
            'phone' => $value->phone,
            'guest_list' => $value->guest_list,
            'check_in' => $value->$date1,
            'check_out' => $value->$date,
            'room' => $value->$room1,
            'items' => $value->$item1,

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
