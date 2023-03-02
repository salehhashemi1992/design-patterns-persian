<?php

// Usage example
$editor = new Editor();
$editor->type('This is the first sentence.');
$editor->type('This is the second sentence.');

// Save the current state
$history = new EditorHistory();
$history->addMemento($editor->save());

// Add more content
$editor->type('This is the third sentence.');

// Restore to previous state
$editor->restore($history->getMemento(0));

echo $editor->getContent(); // Output: This is the first sentence. This is the second sentence.