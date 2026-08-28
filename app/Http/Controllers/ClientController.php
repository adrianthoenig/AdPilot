<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    // @desc    Shows all clients available
    // @route   GET /client
    public function index() : View {
        return view('dashboard.clients');
    }
}
