<?php

/**

Databse connection 
Export mysqli object with $db variable 

*/


$dbname = '';
$table = '';

$user = '';
$password = '';

$host = '';


$db = new mysqli($host, $user, $password, $dbname);


if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    //die();
}


