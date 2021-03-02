<?php
/*Define est une fonction qui définit des constantes*/
DEFINE("DB_HOST","localhost");  //constante qui contient localhost ou 127.0.0.1
DEFINE("DB_USER","root"); // constante qui contient l'utilisateur par défaut de la BDD
DEFINE("DB_PASSWORD",""); //Password
DEFINE("DB_NAME", "app_contact"); //le nom de la base de donnée 
define("SITE_TITLE", "contact APP"); // le titre de notre application 

//Paths
define('BASE_URI', 'http://' . $_SERVER['SERVER_NAME'] . '/app_cont/');
/*  BASE_URI et le chemin absolu de notre application 

dans notre cas  : 

$_SERVER['SERVER_NAME'] => localhost/

 */
?>