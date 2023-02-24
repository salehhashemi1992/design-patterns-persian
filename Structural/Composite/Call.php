<?php

// Usage example
$book = new Book("The Hitchhiker's Guide to the Galaxy", 10.99);
$gadget = new Gadget("Wireless Headphones", 79.99);
$movie = new Movie("Inception", 7.99);
$song = new Song("Bohemian Rhapsody", 0.99);

$catalog = new ProductCatalog();
$catalog->addProduct($book);
$catalog->addProduct($gadget);
$catalog->addProduct($movie);
$catalog->addProduct($song);

echo $catalog->getName() . "\n";
echo "Total price: $" . $catalog->getPrice();