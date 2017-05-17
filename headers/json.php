<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 2:11 PM
 */
$data = [1,3,4,5];
header('Content-Type: application/json');
echo json_encode($data);
