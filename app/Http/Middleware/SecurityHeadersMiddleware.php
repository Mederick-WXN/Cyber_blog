<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeadersMiddleware
{
    private $unwantedHeaders = ['X-Powered-By', 'server', 'Server','Vary'];

    /**
     * @param $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (!app()->environment('testing')) {
            $response->headers->set('Referrer-Policy', 'unsafe-url');
            $response->headers->set('X-XSS-Protection', '1;');
            $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT,DELETE,OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type,Authorization,X-Requested-With,X-CSRF-Token');
            // TODO
            $this->removeUnwantedHeaders($this->unwantedHeaders);
        }

        return $response;
    }

    /**
     * @param $headers
     */
    private function removeUnwantedHeaders($headers): void
    {
        foreach ($headers as $header) {
            header_remove($header);
        }
    }
}

