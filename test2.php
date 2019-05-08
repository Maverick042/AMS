<?php
    include_once 'db_functions.php';
    $db = new DB_Functions();

    $result = $db->getAllUsers();

    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            echo "User id: ".$row["user_id"]."</br>First Name: ".$row["first_name"]."</br>Last Name: ".$row["last_name"]."</br>Email: ".$row["email"]."</br>Password: ".$row["password"]."</br></br>";
        }
    } else {
        echo 'No users found.';
    }
?>