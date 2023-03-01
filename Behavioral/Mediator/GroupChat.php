<?php

class GroupChat
{
    private string $name;
    private array $users = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addUser(User $user): void
    {
        // Add user to the group chat
        $this->users[] = $user;
    }

    public function sendMessage(User $user, $message): void
    {
        // Send message to all users in the group chat
        foreach ($this->users as $u) {
            if ($u !== $user) {
                $u->receiveMessage($message);
            }
        }
    }
}