<?php
include_once 'db_functions.php';
$db = new DB_Functions();

$first_name = 'aaqq';
$last_name = 'erd';
$email = 'asfif@c.com';
$password = 'ghong';

$db->storeUser($first_name, $last_name, $email, $password);
?>