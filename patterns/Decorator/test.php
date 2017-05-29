<?php
require_once 'Beverage.php';

abstract class Test extends Beverage{
    public function test2(){
        echo "OK";
    }
    public function cost(){
    }
}