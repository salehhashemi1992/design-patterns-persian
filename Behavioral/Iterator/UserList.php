<?php

class UserList implements Countable, Iterator
{
    /**
     * @var User[]
     */
    private array $users = [];
    private int $currentIndex = 0;

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    public function removeUser(User $userToRemove)
    {
        foreach ($this->users as $key => $user) {
            if ($user->getUserInfo() === $userToRemove->getUserInfo()) {
                unset($this->users[$key]);
            }
        }

        $this->users = array_values($this->users);
    }

    public function count(): int
    {
        return count($this->users);
    }

    public function current(): User
    {
        return $this->users[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->users[$this->currentIndex]);
    }
}