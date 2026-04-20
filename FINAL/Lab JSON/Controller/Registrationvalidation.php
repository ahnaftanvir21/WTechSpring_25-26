<?php
session_start();
$name = "";
$email= "";
$website = "";
$gender = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    echo $name;
    $email = $_POST["email"];
    echo "Email: " .$email;
    $website = $_POST['website'];
    $gender = $_POST["gender"];
    echo  $gender;
    if(!empty($name) && strlen($name) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('@^(?:http://)?([^/]+)@i', $url, $website); && !empty($gender)){
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["website"] = $website;
        $_SESSION["gender"] = $gender;
        setcookie('name',$name,time()+3600,"/");
        setcookie('email',$email,time()+3600,"/");
        setcookie('website',$name,time()+3600,"/");
        setcookie('gender',$gender,time()+3600,"/");
        echo "login Successfull";
    }
    
    if(isset($_SESSION["name"]) || isset($_COOKIE["name"]) && isset($_SESSION["email"]) || isset($_COOKIE["email"]) && isset($_SESSION["website"]) || isset($_COOKIE["website"]) && isset($_SESSION["gender"]) || isset($_COOKIE["gender"])){
        echo "Welcome Back!";
    }
}
?>