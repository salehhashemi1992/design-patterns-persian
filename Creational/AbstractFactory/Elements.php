<?php

// Concrete Product class
class WindowsButton implements Button {
    public function render(): string {
        return "Windows style button\n";
    }
}

// Concrete Product class
class MacOSButton implements Button {
    public function render(): string {
        return "MacOS style button\n";
    }
}

// Concrete Product class
class WindowsCheckbox implements Checkbox {
    public function render(): string {
        return "Windows style checkbox\n";
    }
}

// Concrete Product class
class MacOSCheckbox implements Checkbox {
    public function render(): string {
        return "MacOS style checkbox\n";
    }
}