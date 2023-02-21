<?php

// Concrete middleware
class LoggingMiddleware implements Middleware
{
    public function handle($request, Closure $next)
    {
        echo "Logging middleware handled the request.\n";
        return $next($request);
    }
}

class AuthorizationMiddleware implements Middleware
{
    public function handle($request, Closure $next)
    {
        echo "Authorization middleware handled the request.\n";
        return $next($request);
    }
}

class ThrottlingMiddleware implements Middleware
{
    public function handle($request, Closure $next)
    {
        echo "Throttling middleware handled the request.\n";
        return $next($request);
    }
}