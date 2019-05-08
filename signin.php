<?php

require "dbconnect.php" ;
require 'plugins/zebrasession/Zebra_Session.php';
$link = $db->get_link();
$session = new Zebra_Session($link, 'sEcUr1tY_c0dE');

if(isset($_POST['ID']) && isset($_POST['pass']))
{
    if(!empty($_POST['ID']) && !empty($_POST['pass']))
    {
        $db->select(
            'email, password',
            'user',
            'email = ? AND password = ?',
            array($_POST['Email'], $_POST['Password'])
        );
        $record = $db->returned_rows;
        if($record == 1)
        {
            date_default_timezone_set("Asia/Dhaka");
            $_SESSION['ID'] = $_POST['ID'];
            $db->update(
                'user',
                array(
                    'lastLoggedIn' => date("Y-m-d H:i:s"),
                ),
                'ID = ?',
                array($_POST['ID']));
            //echo  $_SESSION['ID'];
            header('Location: index.php');
        }
        else
        {
            header('Location: index.php');
        }
        //$record = $db->fetch_assoc_all();

    }
    else
    {
        header('Location: index.php');
    }
}
else
{
    header('Location: index.php');
}

