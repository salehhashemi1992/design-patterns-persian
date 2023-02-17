<?php

class CreditCardFactory implements PaymentMethodFactory {
    private string $cardNumber;
    private string $cvv;
    private string $expiryDate;

    public function __construct(string $cardNumber, string $cvv, string $expiryDate) {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiryDate = $expiryDate;
    }

    public function create(): CreditCard
    {
        return new CreditCard($this->cardNumber, $this->cvv, $this->expiryDate);
    }
}

class PayPalFactory implements PaymentMethodFactory {
    private string $email;
    private string $password;

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function create(): PayPal
    {
        return new PayPal($this->email, $this->password);
    }
}
