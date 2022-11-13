<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::latest()->paginate(7);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    
    public function store(ClientStoreRequest $request)
    {
        Client::create($request->validated());
        return to_route('clients.index');
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }


    public function update(ClientUpdateRequest $request, Client $client)
    {
        $client->update($request->validated());
        return to_route('clients.index');
    }


    public function destroy(Client $client)
    {
        $client->delete();
        return back();
    }
}
