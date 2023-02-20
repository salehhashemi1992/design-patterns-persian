<?php

// Third-Party Payment Gateway API
class PaymentGateway {
    public function makePayment($amount): void
    {
        // code to make payment through the third-party payment gateway API
        echo "Payment of $amount processed using the third-party payment gateway API\n";
    }
}