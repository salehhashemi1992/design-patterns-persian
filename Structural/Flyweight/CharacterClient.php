<?php

/**
 * The Client represents a character in the game.
 */
class CharacterClient
{
    private string $name;
    private $sharedCharacter;

    public function __construct(string $name, CharacterFactory $factory, $height, $weight, $hairColor)
    {
        $this->name = $name;
        $this->sharedCharacter = $factory->getSharedCharacter($height, $weight, $hairColor);
    }

    public function render(): void
    {
        $this->sharedCharacter->render($this->name);
    }
}