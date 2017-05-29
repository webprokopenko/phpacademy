<?php
require_once 'Beverage.php';

Abstract Class CondimentDecorator extends Beverage{
    public function getDescription()
    {
        return $this->description;
    }
    abstract function __construct();
}