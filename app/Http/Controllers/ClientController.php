<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Client;

class ClientController extends Controller
{
    // @desc    Shows all clients available
    // @route   GET /clients
    public function index(Client $client) : View {
        $clients = Client::all();
        return view('dashboard.clients.index')->with('clients', $clients);
    }

    // @desc    Shows form to create a new client
    // @route   GET /dashboard/clients/create
    public function create() : View {
        return view('dashboard.clients.create');
    }

    // @desc    Stores new created client
    // @route   POST /dashboard/clients
    public function store(Request $request) : RedirectResponse {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'industry' => ['nullable'],
            'website' => ['url', 'nullable'],
            'country' => ['string', 'nullable'],
            'city' => ['string', 'nullable'],
            'logo_path' => ['nullable', 'image', 'mimes:jpg,webp,png,jpg'],
            'primary_contact_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:clients'],
            'phone' => ['nullable', 'numeric'],
            'job_title' => ['nullable'],
            'status' => ['nullable'],
            'start_date' => ['nullable'],
            'currency' => ['required'],
            'monthly_budget' => ['nullable']
        ]);

        Client::create($validatedData);
        return redirect()->route('dashboard.clients.index')->with('success', 'Client successfully created');
    }
}
