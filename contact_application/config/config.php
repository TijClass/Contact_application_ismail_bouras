
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "ismail";

$con = mysqli_connect($host,$username,$password,$db);
if (!$con){
    die("error :" . mysqli_connect_error());
}
?>