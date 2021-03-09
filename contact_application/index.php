<?php

    require_once "./core/init.php";

    if($_SESSION["login"] != "true"){
        header("location:login.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page3.css">
    <title>Document</title>
</head>
<body>
    <div class="table">
        <div class="nav">
            <div class="nap">
            <img src="./assets/img/Y.svg" alt="">
            </div>
            <div class="fap">
                <div>
                    <h2>My web app</h2>
                </div>
                <div>
                    <button class="button"> < Logout</button>            
                </div>
            </div>
        </div>
        <div class="xy">
            <div class="one">
                <h2>Contact List</h2>
            </div>
            <div class="tow">
                <div class="chil">
                    <input  type="text" id="name" placeholder=" Search " requiered >
                </div>
                <div class="chil">
                    <button class="button add">Add a Person</button> 
                </div>
            </div>
        </div>
        <div class="din">
        <table>
            <tr>
                <th>ID</th>
                <th>first name</th>
                <th>last name</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Phone</th>
                <th>groupe</th>
                <th>actions</th>
            </tr>
            <tr>
                <td>58011</td>
                <td>Abby</td>
                <td>Adams</td>
                <td>abby@anywhere.com</td>
                <td>adress1</td>
                <td>phone1</td>
                <td>family</td>
                <td class="x">Edit <img  src="../assets/img/o.svg" alt=""></td>
            </tr>
            <tr>
                <td>58011</td>
                <td>Barbara</td>
                <td>bardley</td>
                <td>Barbara@anywhere.com</td>
                <td>adress2</td>
                <td>phone2</td>
                <td>family</td>
                <td class="x">Edit <img  src="../assets/img/o.svg" alt=""></td>
            </tr>
            <tr>
                <td>58013</td>
                <td>Cassie</td>
                <td>Cohen</td>
                <td>cassie@anywhere.com</td>
                <td>adress3</td>
                <td>phone3</td>
                <td>friend</td>
                <td class="x">Edit <img  src="../assets/img/o.svg" alt=""></td>
            </tr>
            <tr>
                <td>58014</td>
                <td>Dana</td>
                <td>Donnely</td>
                <td>dana@anywhere.com</td>
                <td>adress4</td>
                <td>phone4</td>
                <td>friend</td>
                <td class="x">Edit <img  src="../assets/img/o.svg" alt=""></td>
            </tr>
            <tr>
                <td>58015</td>
                <td>Edith</td>
                <td>Eastman</td>
                <td>edith@anywhere.com</td>
                <td>adress5</td>
                <td>phone5</td>
                <td>business</td>
                <td class="x">Edit <img  src="../assets/img/o.svg" alt=""></td>
            </tr>
            
        </table>
        </div>
    </div>
</body>
</html>