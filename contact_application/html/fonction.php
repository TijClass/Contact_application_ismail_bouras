<?php 
class contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="ismail";
    public $mysgli;
    public function __construct()
    {
        return $this->mysgli=new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
    public function contact_us($data){

    }
    // public function contact_us($data){
    //     $fname=$data['name'];
    //     $lname=$data['surname'];
    //     $email=$data['email'];
    //     $adress=$data['adress'];
    //     $phone=$data['phone'];
    //     $message=$data['message'];
    //     $q="insert into contact_us set first_name='$fname', last_name='$lname', email='$email', adress='$adress', phone='$phone', message='$message'";
    //     $data= $this->mysqli->query($q);
    //     if($data==true){
    //         $body="One message received from hubbunch contact us. details are below..<br> first_name='$fname', last_name='$lname', email='$email',adress='$adress',  phone='$phone', message='$message'";
    //         return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
    //     }
    // }

}
?>