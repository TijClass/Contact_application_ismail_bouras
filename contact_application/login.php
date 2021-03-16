<?php
require_once "./core/init.php";

if ( isset($_SESSION["login"]) ) {
    header('location: index.php');
    die();
}


if (isset($_POST['submit'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Query
    $sql = "SELECT * FROM isme WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($con,$sql);

    if($result->num_rows === 1)
    {
        $_SESSION["login"] = "true";
        header('location: index.php');
        die();
    }
    else {
        header('location: login.php');
        session_unset();
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page1.css">
    <title>Document</title>
</head>
<body>

    <div class="con">      
    <div class="contran">
        <img src="./assets/img/Y.svg" alt="">
        <div class="sib">
        <h1>WELCOME sub title </h1>
        <p class="par">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="button"> <   read</button> 
        </div>
    </div>
    <form action="./login.php" method="POST">
    <div class="log">
        <h3>Welcome back</h3>
        <h2 class="h2">login to your account</h2>
        <label class="" for="email">E-mail</label>
        <input class=" " type="email" id="email" name="username" placeholder="e-mail" >
        <label class="">password</label>
        <input class=""type="password" id="password" name="password" placeholder="password" >
        <input type="submit" class="button but" name="submit" value="Login now">
    </div>
    </form>
    </div>
</body>
</html>