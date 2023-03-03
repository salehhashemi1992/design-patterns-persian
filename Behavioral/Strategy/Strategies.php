<?php

class SilverDiscount implements DiscountStrategy
{
    public function calculateDiscount($price): float
    {
        return $price * 0.1; // 10% discount for silver members
    }
}

class GoldDiscount implements DiscountStrategy
{
    public function calculateDiscount($price): float
    {
        return $price * 0.2; // 20% discount for gold members
    }
}

class PlatinumDiscount implements DiscountStrategy
{
    public function calculateDiscount($price): float
    {
        return $price * 0.3; // 30% discount for platinum members
    }
}
