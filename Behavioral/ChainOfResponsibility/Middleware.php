<?php

// Middleware interface
interface Middleware {
    public function handle($request, Closure $next);
}