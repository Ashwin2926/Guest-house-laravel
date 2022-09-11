<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Clients::paginate();
        return view('clients.index', compact('clients'));
    }

    

    public function show(Clients $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Clients $client)
    {
        return view('clients.edit', compact('client'));
    }
//using
    public function update(Request $request, Clients $client)
    {
         $client->update($request->all());
        
        return redirect()->route('clients.index') ->with('message', 'Updated Successfully.');
    }

    public function destroy(Clients $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Contact Deleted Successfully.');
    }
}
