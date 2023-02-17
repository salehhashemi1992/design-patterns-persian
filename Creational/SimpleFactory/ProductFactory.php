<?php

class ProductFactory
{
    /**
     * @throws Exception
     */
    public function createProduct(string $type, string $name, int $price, string $description): Product
    {
        if ($type == "book") {
            return new Book($name, $price, $description);
        } else if ($type == "clothing") {
            return new Clothing($name, $price, $description);
        } else if ($type == "electronics") {
            return new Electronics($name, $price, $description);
        } else {
            throw new Exception("Invalid product type.");
        }
    }
}
