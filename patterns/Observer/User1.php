<?php
require_once 'Observer.php';
require_once 'Observable.php';

Class User1 implements Observer
{
    private $_email = 'user1@tut.by';
    private $_subject = 'New mail to user1';
    private $_body = 'Hi, User1, I`m a new Journal';

    public function userMail()
    {
        echo 'new notification sent to user 1';
    }
    public function update()
    {
        $this->userMail();
    }
}