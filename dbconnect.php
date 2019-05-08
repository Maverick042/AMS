<?php

require 'plugins/zebradatabase/Zebra_Database.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('localhost', 'root', '', 'airlines');

$db2 = new Zebra_Database();

$db2->connect('localhost', 'root', '', 'airlines');
?>



