<?php

class WelcomeEmailSender extends EmailSender
{
    protected function getSubject(): string
    {
        return 'Welcome to our site!';
    }

    protected function getBody(): string
    {
        return 'Thank you for joining our site!';
    }
}

class UpdateEmailSender extends EmailSender
{
    protected function getSubject(): string
    {
        return 'Your account details have been updated';
    }

    protected function getBody(): string
    {
        return 'Your account details have been updated. Please log in to view your updated information.';
    }
}
