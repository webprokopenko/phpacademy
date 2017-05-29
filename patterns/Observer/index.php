<?php
require_once 'Journal.php';
require_once 'User1.php';
require_once 'User2.php';

$comment = new Journal();
$comment->attach(new User1());
$comment->attach(new User2());
$comment->published();