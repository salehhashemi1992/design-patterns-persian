<?php

// Adapter Class
class PaymentGatewayAdapter implements Payment {
    private PaymentGateway $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function processPayment($amount) {
        $this->paymentGateway->makePayment($amount);
    }
}