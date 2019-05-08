<?php
    include_once 'db_functions.php';
    $db = new DB_Functions();

    $email = 'asif@c.uuucom';
    $password = 'gottttng';

    if($db->checkIfExists($email, $password)){
        echo "Login successful.";
    }else{
        echo "Invalid email or password.";
    }
?>