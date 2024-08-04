<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class SanitizeInput
{
    
        public function handle(Request $request, Closure $next): Response
        {
            $input = $request->all();
            
            array_walk_recursive($input, function (&$input) {
                // Remove HTML tags to prevent XSS attacks
                $input = strip_tags($input);
    
                // Convert special characters to HTML entities to neutralize SQL special characters
                $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
    
                // Additional SQL injection prevention - escape special characters
                $input = addslashes($input);
            });
            
            // Merge sanitized input back into the request
            $request->merge($input);

    
            return $next($request);
        }
    }
    

