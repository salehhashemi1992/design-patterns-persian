<?php

// Example usage
$editor = new TextEditor();

$editor->type("First line");

$editor->setState(new UpperCase());

$editor->type("Second Line");
$editor->type("Third Line");

$editor->setState(new LowerCase());

$editor->type("Fourth Line");
$editor->type("Fifth Line");

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line