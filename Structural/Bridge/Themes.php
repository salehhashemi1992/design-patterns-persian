<?php

class LightTheme implements Theme
{
    public function getBackgroundColor(): string
    {
        return "#FFFFFF";
    }

    public function getTextColor(): string
    {
        return "#000000";
    }
}

class DarkTheme implements Theme
{
    public function getBackgroundColor(): string
    {
        return "#1E1E1E";
    }

    public function getTextColor(): string
    {
        return "#FFFFFF";
    }
}
