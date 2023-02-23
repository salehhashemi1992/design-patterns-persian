<?php

abstract class AbstractWebPage implements WebPage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function setTheme(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getBackgroundColor(): string
    {
        return $this->theme->getBackgroundColor();
    }

    public function getTextColor(): string
    {
        return $this->theme->getTextColor();
    }

    abstract public function getContent(): string;
}