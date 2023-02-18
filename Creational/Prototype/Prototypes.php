<?php

class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
    }
}

class SQLBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'SQL';
    }
    function __clone() {
    }
}