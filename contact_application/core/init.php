<?php
header('Content-type: text/html; charset=utf-8');
//Include Configuration
require_once('../config/config.php');
//Helper Function Files
require_once '../helpers/functions.php';

/* l'utilisation des constantes prédifinies dans notre fichier config.php*/
$con = new mysqli($host,$username,$password,$db);
mb_internal_encoding('UTF-8');

if($con->connect_errno)
{
    echo "Failed to connect to MYSQL: ".$con->connect_error.__LINE__;
    exit();
}
?>