<?php

namespace App\Http\Controllers;

use App\Models\All;
use Illuminate\Http\Request;
use App\Models\Current;

class CurrentController extends Controller
{
    public function edit(Current $current){
        return view('clients.edit', compact('current'));
    }

    public function update(Request $request, Current $current){
        $current->update($request->all());

        return redirect()->route('book.index') ->with('message', 'Updated Successfully.');
    }


   
}