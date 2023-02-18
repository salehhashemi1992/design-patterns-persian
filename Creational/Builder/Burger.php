<?php

// Product
class Burger {
    private string $bun;
    private string $patty;
    private string $cheese;
    private array $toppings;

    public function setBun(string $bun): void
    {
        $this->bun = $bun;
    }

    public function setPatty(string $patty): void
    {
        $this->patty = $patty;
    }

    public function setCheese(string $cheese): void
    {
        $this->cheese = $cheese;
    }

    public function addTopping(string $topping): static
    {
        $this->toppings[] = $topping;
        return $this;
    }

    public function getBurgerInfo(): string {
        $toppingsStr = implode(", ", $this->toppings);
        return "Burger: {$this->bun} + {$this->patty} + {$this->cheese} + {$toppingsStr}";
    }
}