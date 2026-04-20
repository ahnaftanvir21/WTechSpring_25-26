<?php
session_start();
$name = "";
$email= "";
$address = "";
$gender = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    echo $name;
    $email = $_POST["email"];
    echo "Email: " .$email;
    $address = $_POST['Address'];
    $gender = $_POST["gender"];
    echo  $gender;
    if(!empty($name) && strlen($name) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($address) && !empty($gender)){
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["Address"] = $address;
        $_SESSION["gender"] = $gender;
        setcookie('name',$name,time()+3600,"/");
        setcookie('email',$email,time()+3600,"/");
        setcookie('Address',$name,time()+3600,"/");
        setcookie('gender',$gender,time()+3600,"/");
        echo "login Successfull";
    }
}
?>