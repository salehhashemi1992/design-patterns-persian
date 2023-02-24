<?php

// Composite class
class ProductCatalog implements Product
{
    private array $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getName(): string
    {
        return "Product Catalog";
    }

    public function getPrice(): float
    {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }
}