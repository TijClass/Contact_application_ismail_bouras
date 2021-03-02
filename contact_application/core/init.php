<?php
header('Content-type: text/html; charset=utf-8');
//Include Configuration
require_once('config/config.php');
//Helper Function Files
require_once 'helpers/functions.php';

/* l'utilisation des constantes prédifinies dans notre fichier config.php*/
$con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
mb_internal_encoding('UTF-8');

if($con->connect_errno)
{
    echo "Failed to connect to MYSQL: ".$con->connect_error.__LINE__;
    exit();
}
?>