<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client_contact;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $client = session('active_client');
        $contact = Client_contact::where('client_id', $client->id)->first();
        return view('index', compact('client', 'contact'));
    }
}
