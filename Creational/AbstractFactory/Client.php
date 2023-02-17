<?php

// Client code
function createUI(UIFactory $factory): string {
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();
    return $button->render() . $checkbox->render();
}