<?php
require_once 'Beverage.php';

class Espresso extends Beverage{
    public function getDescription()
    {
     return $this->description;
    }

    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost()
    {
        return 1.99;
    }
}