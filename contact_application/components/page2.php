<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page2.css">
    <title>Document</title>
</head>
<body>
    <div class="con2">
        <form id="form" method="POST" role="form">
            <label for="name"  class="">first Name</label>
            <input type="text" name="fname" placeholder="Enter your first Name" >
            <label for="name"  class="">last Name</label>
            <input type="text" name="lname"  placeholder="Enter your last Name" >
            <label for="email" class="">Email</label>
            <input type="email" name="email"  placeholder="Enter your Email"  >
            <label for="adress"  class="">Adress</label>
            <input type="text" name="adress"  placeholder="Enter your Adress" >
            <label for="name"  class="">Phone</label>
            <input type="text" name="phone"  placeholder="Enter your Phone" >
            <div class="bot">
                <input type="radio" name="sir1"  class="input">family
                <input type="radio" name="sir2"  class="input">friend
                <input type="radio" name="sir3"  class="input">Businness
            </div>
            <label for="name" id="name-label" class="unoo">notes</label>
            <textarea id="message" class="textarea uno" name="message" placeholder="Enter your message here..."></textarea>
            <button class="button" name="sub" >Submit</button> 
        </form>
        <?php

        ?>
    </div>
</body>
</html>