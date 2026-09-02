<?php

namespace App\Http\Controllers;

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
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:256',
            'industry' => 'required',
            'website' => 'nullable|url',
            'country' => 'nullable|string|max:200',
            'city' => 'nullable|string|max:200',
            'logo_path' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:2048',
            'contact_name' => 'required|string|max:256',
            'email' => 'required|email|max:300',
            'phone' => 'nullable|string',
            'job_title' => 'nullable',
            'client_status' => 'required|in:onboarding,active,paused,draft',
            'start_date' => 'nullable',
            'currency' => 'required',
            'monthly_budget' => 'nullable|numeric|min:0',
            'advertising_platforms' => 'nullable'
        ], [
            'logo_path.image' => 'The company logo must be an image',
            'logo_path.mimes' => 'The company logo must be a file of type: jpeg, jpg, png, webp or gif',
            'logo_path.max' => 'The company logo must be maximum 2MB'
        ]);

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
