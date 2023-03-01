<?php

class GroupChatMediator implements GroupChatMediatorInterface
{
    public function addUserToGroupChat(User $user, GroupChat $groupChat)
    {
        // Add user to the group chat
        $groupChat->addUser($user);
    }

    public function sendMessageToGroupChat(User $user, GroupChat $groupChat, $message)
    {
        // Send message to the group chat
        $groupChat->sendMessage($user, $message);
    }
}