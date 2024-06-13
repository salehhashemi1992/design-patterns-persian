<?php

// Client code
function clientCode(): void
{
    // Create a new director
    $director = new BurgerDirector();

    // Create a basic burger builder
    $basicBuilder = new BasicBurgerBuilder();

    // Set the builder for the director
    $director->setBuilder($basicBuilder);

    // Build the burger
    $basicBurger = $director->buildBurger();

    // Print the burger
    echo $basicBurger->getBurgerInfo();
}
