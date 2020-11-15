<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
$_SESSION = array();
session_destroy();
header("location: login.php");

?>