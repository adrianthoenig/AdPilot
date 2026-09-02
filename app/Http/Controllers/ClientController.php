<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Client;

use Illuminate\Support\Number;

class ClientController extends Controller
{
    // @desc    Shows all clients available
    // @route   GET /clients
    public function index(): View
    {
        $clients = Client::latest()->get();
        return view('dashboard.clients.index')->with('clients', $clients);
    }

    // @desc    Shows form to create a new client
    // @route   GET /dashboard/clients/create
    public function create(): View
    {
        return view('dashboard.clients.create');
    }

    // @desc    Stores new created client
    // @route   POST /dashboard/clients
    public function store(ClientRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        if($request->has('logo_path')) {
            $path = $request->file('logo_path')->store('logos', 'public');
            $validatedData['logo_path'] = $path;
        } else {
            $validatedData['logo_path'] = 'logos/default.jpg';
        }
        

        Client::create($validatedData);
        return redirect()->route('dashboard.clients.index')->with('success', 'Client successfully created')->with('success', 'Client created successfully');
    }

    public function show(Client $client) : View {
        return view('dashboard.clients.show')->with('client', $client);
    }
}
