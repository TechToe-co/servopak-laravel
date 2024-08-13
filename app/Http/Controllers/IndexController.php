<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Client_contact;


class IndexController extends Controller
{
    public function index(Request $request)
    {
        $domain = $request->getHost();
        $client = Client::where('base_url', $domain)->first();

        if ($client) {
            $contact = Client_contact::where('client_id', $client->id)->first();
            return view('index', compact('client', 'contact'));
        } else {
            abort(404, 'Your domain is not valid.');
        }    }

    public function contact(Request $request)
    {
        $domain = $request->getHost();
        $client = Client::where('base_url', $domain)->first();

        if ($client) {
            $contact = Client_contact::where('client_id', $client->id)->first();
            return view('contact', compact('client', 'contact'));
        } else {
            abort(404, 'Your domain is not valid.');
        }    }
    public function service(Request $request)
    {
        $domain = $request->getHost();
        $client = Client::where('base_url', $domain)->first();

        if ($client) {
            $contact = Client_contact::where('client_id', $client->id)->first();
            return view('service', compact('client', 'contact'));
        } else {
            abort(404, 'Your domain is not valid.');
        }    }

    
}
