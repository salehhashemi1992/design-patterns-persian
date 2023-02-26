<?php

/**
 * The Flyweight Factory manages a pool of shared flyweight objects. It
 * ensures that flyweights are shared correctly. When the client requests a
 * flyweight, the factory either returns an existing instance or creates a new
 * one, if it doesn't exist yet.
 */
class CharacterFactory
{
    private array $characters = [];

    public function getSharedCharacter($height, $weight, $hairColor)
    {
        $key = "$height-$weight-$hairColor";

        if (!isset($this->characters[$key])) {
            echo "Creating shared character '$key'\n";
            $this->characters[$key] = new SharedCharacter($height, $weight, $hairColor);
        }

        return $this->characters[$key];
    }
}