<?php

// Client Code
$paymentGateway = new PaymentGateway();
$paymentAdapter = new PaymentGatewayAdapter($paymentGateway);
$paymentProcessor = new PaymentProcessor($paymentAdapter);

$paymentProcessor->process(100); // Payment of 100 processed using the third-party payment gateway API