<?php

// Concrete builder for basic burger
class BasicBurgerBuilder implements BurgerBuilder {
    private Burger $burger;

    public function __construct() {
        $this->burger = new Burger();
    }

    public function addBun() {
        $this->burger->setBun("Plain Bun");
    }

    public function addPatty() {
        $this->burger->setPatty("Beef Patty");
    }

    public function addCheese() {
        $this->burger->setCheese("American Cheese");
    }

    public function addToppings() {
        // No additional toppings for basic burger
    }

    public function getBurger(): Burger {
        return $this->burger;
    }
}

// Concrete builder for deluxe burger
class DeluxeBurgerBuilder implements BurgerBuilder {
    private Burger $burger;

    public function __construct() {
        $this->burger = new Burger();
    }

    public function addBun() {
        $this->burger->setBun("Sesame Seed Bun");
    }

    public function addPatty() {
        $this->burger->setPatty("Beef Patty");
    }

    public function addCheese() {
        $this->burger->setCheese("Swiss Cheese");
    }

    public function addToppings() {
        $this->burger->addTopping("Lettuce")
            ->addTopping("Tomato")
            ->addTopping("Onion")
            ->addTopping("Pickles")
            ->addTopping("Ketchup")
            ->addTopping("Mustard");
    }

    public function getBurger(): Burger {
        return $this->burger;
    }
}