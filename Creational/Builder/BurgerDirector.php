<?php

// Director
class BurgerDirector {
    private BurgerBuilder $builder;

    public function setBuilder(BurgerBuilder $builder): Burger {
        $this->builder = $builder;
    }

    public function buildBurger(): Burger {
        $this->builder->addBun();
        $this->builder->addPatty();
        $this->builder->addCheese();
        $this->builder->addToppings();

        return $this->builder->getBurger();
    }
}