<?php

// Builder interface
interface BurgerBuilder {
    public function addBun();
    public function addPatty();
    public function addCheese();
    public function addToppings();
    public function getBurger(): Burger;
}