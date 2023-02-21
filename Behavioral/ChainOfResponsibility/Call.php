<?php

// Client code
$kernel = new Kernel();
$response = $kernel->handle(request());

$response->send();