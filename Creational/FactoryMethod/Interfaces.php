<?php

interface PaymentMethod {
    public function processPayment(int $amount);
}

interface PaymentMethodFactory {
    public function create();
}