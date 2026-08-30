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
    public function index(Client $client): View
    {
        $clients = Client::all();
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
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:256',
            'industry' => 'required',
            'website' => 'nullable|url',
            'country' => 'nullable|string|max:200',
            'city' => 'nullable|string|max:200',
            'logo_path' => 'nullable|image|max:2048|mimes:jpeg,jpg,png,webp',
            'contact_name' => 'required|string|max:256',
            'email' => 'required|email|max:300',
            'phone' => 'nullable|string',
            'job_title' => 'nullable',
            'client_status' => 'required',
            'start_date' => 'nullable',
            'currency' => 'required',
            'monthly_budget' => 'nullable|numeric|min:0',
            'advertising_platforms' => 'nullable'
        ]);

        Client::create($validatedData);
        return redirect()->route('dashboard.clients.index')->with('success', 'Client successfully created')->with('success', 'Client created successfully');
    }
}
