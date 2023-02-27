<?php

$db = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');

$userMapper = new UserMapper($db);
$user = $userMapper->getById(1);
echo $user->getName(); // Outputs the user's name

$newUser = new User(null, 'John Doe', 'john@example.com');
$userMapper->save($newUser);
echo $newUser->getId(); // Outputs the new user's ID