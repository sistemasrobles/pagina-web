<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('Authorization');

        if ($apiKey !== 'OhGTXLiVop5wOTiz1tgXq9XoRkLXsITU8KKeNNgA') {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}