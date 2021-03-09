<?php
session_start();

//Include Configuration
require_once "C:\\xampp\\htdocs\\Contact_application_ismail_bouras\\contact_application\\config\\config.php";

$con = new mysqli($host,$username,$password,$db);
mb_internal_encoding('UTF-8');

if($con->connect_errno)
{
    echo "Failed to connect to MYSQL: ".$con->connect_error.__LINE__;
    exit();
}
?>