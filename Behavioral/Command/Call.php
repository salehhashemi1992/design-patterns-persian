<?php

// Client code
$receiver = new Receiver();
$invoker = new Invoker();

$invoker->addCommand(new AddCommand($receiver, 5));
$invoker->addCommand(new SubtractCommand($receiver, 3));
$invoker->executeCommands();

echo "Current value: " . $receiver->getValue() . "\n"; // Output: Current value: 2

$invoker->undo();
echo "Undone: Current value: " . $receiver->getValue() . "\n"; // Output: Undone: Current value: 5