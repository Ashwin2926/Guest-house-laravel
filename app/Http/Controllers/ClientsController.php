<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = clients::paginate();
        return view('clients.index', compact('clients'));
    }

    

    public function show(clients $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(clients $client)
    {
        return view('clients.edit', compact('client'));
    }
//using
    public function update(Request $request, clients $client)
    {
         $client->update($request->all());
        
        return redirect()->route('clients.index') ->with('message', 'Updated Successfully.');
    }

    public function destroy(clients $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Contact Deleted Successfully.');
    }
}
