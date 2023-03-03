<?php

class Item
{
    public string $name;
    public float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

// Create a shopping cart
$cart = new ShoppingCart();

// Add items to the cart
$item1 = new Item('Widget', 10.00);
$item2 = new Item('Gadget', 5.00);
$cart->addItem($item1);
$cart->addItem($item2);

// Calculate discounts based on customer's membership level
if ($customer->isSilver()) {
    $cart->setDiscountStrategy(new SilverDiscount());
} elseif ($customer->isGold()) {
    $cart->setDiscountStrategy(new GoldDiscount());
} elseif ($customer->isPlatinum()) {
    $cart->setDiscountStrategy(new PlatinumDiscount());
}

// Calculate total with discount
$total = $cart->calculateTotal();
