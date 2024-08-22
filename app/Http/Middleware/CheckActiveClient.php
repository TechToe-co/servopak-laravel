<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Client;


class CheckActiveClient
{
    
    public function handle(Request $request, Closure $next): Response
    {
        $domain = $request->getHost();
        $client = Client::where('base_url', $domain)->first();

        if ($client) {
            // Store client in the session or pass it to the next request
            session(['active_client' => $client]);
        } else {
            return abort(404, 'Your domain is not valid.');
        }

        return $next($request);
    }
}
