<?php

// Define the facade
class OrderFacade
{
    protected OrderVerification $verification;
    protected PaymentProcessor $payment;
    protected OrderFulfillment $fulfillment;

    public function __construct()
    {
        $this->verification = new OrderVerification();
        $this->payment = new PaymentProcessor();
        $this->fulfillment = new OrderFulfillment();
    }

    public function placeOrder(int $orderId, float $amount): bool
    {
        $verified = $this->verification->verifyOrder($orderId);

        if (!$verified) {
            return false;
        }

        $paid = $this->payment->processPayment($amount);

        if (!$paid) {
            return false;
        }

        $fulfilled = $this->fulfillment->fulfillOrder($orderId);

        if (!$fulfilled) {
            return false;
        }

        return true;
    }
}