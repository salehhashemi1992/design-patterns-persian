<?php

// Payment Interface
interface Payment {
    public function processPayment($amount);
}