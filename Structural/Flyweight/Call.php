<?php

// Client code
$factory = new CharacterFactory();

$player1 = new CharacterClient('Player 1', $factory, 180, 75, 'blonde');
$player1->render(); // Drawing character 'Player 1' with height '180', weight '75', and hair color 'blonde'

$player2 = new CharacterClient('Player 2', $factory, 180, 75, 'blonde');
$player2->render(); // Drawing character 'Player 2' with height '180', weight '75', and hair color 'blonde'

$player3 = new CharacterClient('Player 3', $factory, 190, 80, 'red');
$player3->render(); // Drawing character 'Player 3' with height '190', weight '80', and hair color 'red'
