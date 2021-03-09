<?PHP 
require_once "../core/init.php";

if(isset($_POST['submit'])){

echo '<pre>';
print_r($_POST);
echo '</pre>';

    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];  
    $email = $_POST['email'];  
    $adress =$_POST['adress'];  
    $phone = $_POST['phone'];  
    $group = $_POST['group'];  
    // $notes =$_POST['notes'];  
    
    $sql = "INSERT INTO `contact_us` (`fname`,`lname`,`email`,`adress`,`phone`,`catig`) VALUES('$fname','$lname','$email','$adress','$phone','$group')";
    echo $sql;

    $result= mysqli_query($con,$sql);

    if ($result) {
        echo 'nice';
    }else echo 'no';

}
?>
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
        <form method="POST">
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
                <input type="radio" name="group" value="family"  class="input">Family
                <input type="radio" name="group" value="friend"  class="input">Friend
                <input type="radio" name="group" value="Businness"  class="input">Businness
            </div>
            <label for="name"  class="unoo">notes</label>
            <textarea  class="textarea uno" name="notes" placeholder="Enter your message here..."></textarea>
            <input type="submit" class="button but" name="submit" value="Login now">
        </form>
    </div>
</body>
</html>