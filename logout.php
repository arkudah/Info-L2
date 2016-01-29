<?php

session_start();

session_unset();

session_destroy();

$_SESSION["connection"]=0;

header('location:connection.php');

?>