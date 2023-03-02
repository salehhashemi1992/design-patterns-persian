<?php

// Create the news publisher and attach subscribers
$publisher = new NewsPublisher();
$subscriber1 = new NewsSubscriber('Saleh');
$subscriber2 = new NewsSubscriber('Mina');

$publisher->attach($subscriber1);
$publisher->attach($subscriber2);

// Publish new articles
$publisher->publishArticle('New article 1', 'Content for new article 1');
$publisher->publishArticle('New article 2', 'Content for new article 2');

// Detach a subscriber
$publisher->detach($subscriber2);

// Publish another article
$publisher->publishArticle('New article 3', 'Content for new article 3');