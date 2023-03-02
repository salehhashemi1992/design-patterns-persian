<?php

// Define the observer interface
class NewsSubscriber implements SplObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        $articles = $subject->getArticles();
        echo "Hello {$this->name}, the following articles have been published:\n";
        foreach ($articles as $article) {
            echo "- {$article['title']} : {$article['content']}\n";
        }
        echo "\n";
    }
}