<?php

// create some users
$user1 = new User('Saleh', 31);
$user2 = new User('Ahmad', 28);
$user3 = new User('Mina', 31);

// create a user list and add the users to it
$userList = new UserList();
$userList->addUser($user1);
$userList->addUser($user2);
$userList->addUser($user3);

// iterate over the user list and output each user's name
foreach ($userList as $user) {
    echo $user->getName() . PHP_EOL;
}

// remove a user from the list
$userList->removeUser($user2);

// iterate over the user list again, this time only outputting the age
foreach ($userList as $user) {
    echo $user->getAge() . PHP_EOL;
}

// output the total number of users in the list
echo 'Total number of users: ' . count($userList) . PHP_EOL;