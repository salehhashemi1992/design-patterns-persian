<?php

class HomePage extends AbstractWebPage
{
    public function getContent(): string
    {
        return "<div style='background-color: {$this->getBackgroundColor()}; color: {$this->getTextColor()};'>Welcome to our website!</div>";
    }
}

class AboutPage extends AbstractWebPage
{
    public function getContent(): string
    {
        return "<div style='background-color: {$this->getBackgroundColor()}; color: {$this->getTextColor()};'>Learn more about us...</div>";
    }
}