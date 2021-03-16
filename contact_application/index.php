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
                    <a href="logout.php"  class="button"> < Logout</a>            
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
                    <a href="./addPerson.php" class="button add">Add a Person</a> 
                </div>
            </div>
        </div>
        <div class="din">
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>first name</th>
                <th>last name</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Phone</th>
                <th>groupe</th>
            </tr>
            </thead>
            <tbody>
            <?php 

                 $sql = "SELECT * FROM contact_us"; 
                 $result = mysqli_query($con,$sql);
                 $rows = $result->fetch_all(MYSQLI_ASSOC);
                 $length = count($rows);
                if ( $length > 0 ) {

                    for ($i=0; $i < $length; $i++) { 
                        echo '<tr>';
                        echo '<td>'.$rows[$i]["ID"].'</td>';
                        echo '<td>'.$rows[$i]["fname"].'</td>';
                        echo '<td>'.$rows[$i]["lname"].'</td>';
                        echo '<td>'.$rows[$i]["email"].'</td>';
                        echo '<td>'.$rows[$i]["Adress"].'</td>';
                        echo '<td>'.$rows[$i]["phone"].'</td>';
                        echo '<td>'.$rows[$i]["catig"].'</td>';
                        echo '</tr>';

                    }
                    
                }else{
                    echo '<tr>';
                    echo '<td style="text-align:center;" colspan="8">There is no contact</td>';
                    echo '</tr>';
                }

            ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>