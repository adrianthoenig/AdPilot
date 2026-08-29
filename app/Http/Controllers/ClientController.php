<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    // @desc    Shows all clients available
    // @route   GET /clients
    public function index() : View {
        return view('dashboard.clients.index');
    }

    // @desc    Shows form to create a new client
    // @route   GET /dashboard/clients/create
    public function create() : View {
        return view('dashboard.clients.create');
    }
}
