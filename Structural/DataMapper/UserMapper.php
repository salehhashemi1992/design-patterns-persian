<?php

class UserMapper
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById($id): ?User
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new User($result['id'], $result['name'], $result['email']);
    }

    public function save(User $user): void
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
        $name = $user->getName();
        $stmt->bindParam(':name', $name);
        $email = $user->getEmail();
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user->setId($this->db->lastInsertId());
    }
}
