<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientContact;

class IndexController extends Controller
{
    private function getClientAndContact()
    {
        $client = session('active_client');
        $contact = ClientContact::where('client_id', $client->id)->first();
        return compact('client', 'contact');
    }

    public function index()
    {
        $data = $this->getClientAndContact();
        return view('index', $data);
    }

    public function service()
    {
        $data = $this->getClientAndContact();
        return view('service', $data);
    }

    public function contact()
    {
        $data = $this->getClientAndContact();
        return view('contact', $data);
    }

    public function privacy()
    {
        $data = $this->getClientAndContact();
        return view('privacy-policy', $data);
    }
}
