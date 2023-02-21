<?php

// Middleware kernel
class Kernel
{
    protected array $middlewares = [
        LoggingMiddleware::class,
        AuthorizationMiddleware::class,
        ThrottlingMiddleware::class,
    ];

    public function handle($request)
    {
        $pipeline = array_reduce(array_reverse($this->middlewares), function ($next, $middleware) {
            return function ($request) use ($next, $middleware) {
                return (new $middleware)->handle($request, $next);
            };
        }, function ($request) {
            return response('Not Found', 404); // Laravel response
        });

        return $pipeline($request);
    }
}