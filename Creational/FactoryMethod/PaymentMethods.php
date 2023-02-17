<?php

class CreditCard implements PaymentMethod {
    private string $cardNumber;
    private string $cvv;
    private string $expiryDate;

    public function __construct(string $cardNumber, string $cvv, string $expiryDate) {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiryDate = $expiryDate;
    }

    public function processPayment(int $amount) {
        // process payment using credit card details
    }
}

class PayPal implements PaymentMethod {
    private string $email;
    private string $password;

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function processPayment(int $amount) {
        // process payment using PayPal details
    }
}
