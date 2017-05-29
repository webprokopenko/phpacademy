<?php
abstract class Beverage{
    public $description = 'Unknow Beverage';

    abstract public function getDescription();

    protected abstract function cost();
}