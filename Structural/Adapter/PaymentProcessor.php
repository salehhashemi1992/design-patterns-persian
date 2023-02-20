<?php

// Payment Processing System
class PaymentProcessor {
    private Payment $payment;

    public function __construct(Payment $payment) {
        $this->payment = $payment;
    }

    public function process($amount): void
    {
        $this->payment->processPayment($amount);
    }
}