<?php

// Usage example
$lightTheme = new LightTheme();
$darkTheme = new DarkTheme();

$homePage = new HomePage($lightTheme);
echo $homePage->getContent() . "<br>";

$homePage->setTheme($darkTheme);
echo $homePage->getContent() . "<br>";

$aboutPage = new AboutPage($darkTheme);
echo $aboutPage->getContent() . "<br>";