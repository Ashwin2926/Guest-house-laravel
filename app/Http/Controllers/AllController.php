<?php

namespace App\Http\Controllers;

use App\Models\All;
use App\Models\Current;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function destroy(All $all){
        $all =All::get();
        foreach( $all as $key => $value)   {
            $id = $value->id;
            All::destroy($id);

        return redirect()->route('all.index')->with('message', 'Record deleted permanetly');
        }
    }
    public function index()
    {
        $all = All::paginate();
        return view('clients.all', compact('all'));
    }


    public function move(Current $current){

        $current =Current::get();

       foreach( $current as $key => $value)   {
        $id = $value->id;
        
        Current::destroy($id);
        All::create([
            'name' => $value->name,
            'phone' => $value->phone,
            'guest_list' => $value->guest_list,
            'guest_list' => $value->guest_list,
            'check_in' => $value->check_in,
            'check_out' => $value->check_out,
            'room' => $value->room,
            'items' => $value->items,

        ]);
             

        return redirect()->route('all.index') ->with('message', 'Done.');
       }
}


}
