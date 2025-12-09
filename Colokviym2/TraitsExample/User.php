<?php

require_once __DIR__ . '/HasUuid.php';

class User {
    use HasUuid; 

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
