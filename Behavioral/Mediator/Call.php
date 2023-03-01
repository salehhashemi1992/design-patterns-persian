<?php

// Create a new mediator
$mediator = new GroupChatMediator();

// Create some group chats
$groupChat1 = new GroupChat("Group Chat 1");
$groupChat2 = new GroupChat("Group Chat 2");

// Create some users
$user1 = new User("Saleh");
$user2 = new User("Mina");
$user3 = new User("Ahmad");

// Add users to group chats
$user1->joinGroupChat($groupChat1, $mediator);
$user2->joinGroupChat($groupChat1, $mediator);
$user2->joinGroupChat($groupChat2, $mediator);
$user3->joinGroupChat($groupChat2, $mediator);

// Send messages within group chats
$user1->sendMessageToGroupChat($groupChat1, $mediator, "Hello everyone in Group Chat 1!");
$user2->sendMessageToGroupChat($groupChat2, $mediator, "Hi all in Group Chat 2!");

// Output:
// Bob received message: Hello everyone in Group Chat 1!
// Alice received message: Hi all in Group Chat 2!
// Charlie received message: Hi all in Group Chat 2!