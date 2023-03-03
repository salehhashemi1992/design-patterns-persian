<?php

interface DiscountStrategy
{
    public function calculateDiscount($price): float;
}
