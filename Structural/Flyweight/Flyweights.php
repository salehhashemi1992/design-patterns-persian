<?php

/**
 * The Concrete Flyweight provides an implementation of the Flyweight interface.
 * It stores intrinsic state, which is shared across multiple objects.
 */
class SharedCharacter implements Character
{
    private $height;
    private $weight;
    private $hairColor;

    public function __construct($height, $weight, $hairColor)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->hairColor = $hairColor;
    }

    public function render(string $name): void
    {
        echo "Drawing character '$name' with height '{$this->height}', weight '{$this->weight}', and hair color '{$this->hairColor}'\n";
    }
}