<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/26/17
 * Time: 11:47 PM
 */

interface Observable{
    //add new listener
    public function attach(Observer $instanse);

    //send all listener
    public function notify();
}