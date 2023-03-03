<?php

class ShoppingCart
{
    private DiscountStrategy $discountStrategy;
    private array $items = [];

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function setDiscountStrategy(DiscountStrategy $discountStrategy): void
    {
        $this->discountStrategy = $discountStrategy;
    }

    public function calculateTotal(): float|int
    {
        $subtotal = 0;
        foreach ($this->items as $item) {
            $subtotal += $item->price;
        }
        $discount = $this->discountStrategy->calculateDiscount($subtotal);

        return $subtotal - $discount;
    }
}
