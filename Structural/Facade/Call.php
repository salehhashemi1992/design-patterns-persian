<?php

// Client code
$facade = new OrderFacade();
$orderId = 12345;
$amount = 99.99;

if ($facade->placeOrder($orderId, $amount)) {
    echo "Order placed successfully.\n";
} else {
    echo "Failed to place order.\n";
}