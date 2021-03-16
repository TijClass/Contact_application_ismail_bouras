<?php 

require_once "./core/init.php";

if($_SESSION["login"] != "true"){
    header("location:login.php");
    die();
}

if( isset($_GET["action"]) ){
    if ($_GET["action"] == "delete") {
        $sql = "DELETE * FROM contact_us"; 
        $result = mysqli_query($con,$sql);
    }
}