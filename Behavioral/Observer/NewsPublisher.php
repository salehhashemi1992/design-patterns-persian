<?php

class NewsPublisher implements SplSubject
{
    private SplObjectStorage $observers;
    private array $articles;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->articles = array();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function publishArticle($title, $content)
    {
        $this->articles[] = array(
            'title' => $title,
            'content' => $content,
        );

        $this->notify();
    }

    public function getArticles(): array
    {
        return $this->articles;
    }
}