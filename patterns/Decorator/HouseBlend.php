<?php
require_once 'Beverage.php';

class HouseBlend extends Beverage{
    public function getDescription()
    {
        return $this->description;
    }

    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost()
    {
        // TODO: Implement cost() method.
        return 0.99;
    }
}