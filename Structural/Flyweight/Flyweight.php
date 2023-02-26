<?php

/**
 * The Flyweight interface declares a method for accepting extrinsic state.
 */
interface Character
{
    public function render(string $name): void;
}