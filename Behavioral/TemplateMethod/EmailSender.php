<?php

abstract class EmailSender
{
    protected string $recipient;

    public function __construct(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function sendEmail(): void
    {
        $subject = $this->getSubject();
        $body = $this->getBody();

        // Code to send email with subject and body to $this->recipient
    }

    protected abstract function getSubject(): string;

    protected abstract function getBody(): string;
}
