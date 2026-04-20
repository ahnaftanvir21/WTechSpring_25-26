<?php
session_start();
$name = "";
$email= "";
$website = "";
$gender = "";
$datafile ="../data.json";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    //echo $name;
    $email = $_POST["email"];
    //echo "Email: " .$email;
    $website = $_POST['website'];
    $gender = $_POST["gender"];
    //echo  $gender;
    if(!empty($name) && strlen($name) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/\b((https?:\/\/)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/[a-zA-Z0-9#]+\/?)*)(\/)?\b/", $website) && !empty($gender)){
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["website"] = $website;
        $_SESSION["gender"] = $gender;
        setcookie('name',$name,time()+3600,"/");
        setcookie('email',$email,time()+3600,"/");
        setcookie('website',$name,time()+3600,"/");
        setcookie('gender',$gender,time()+3600,"/");
        echo "login Successfull\n";

    }
    
    if(isset($_SESSION["name"]) || isset($_COOKIE["name"]) && isset($_SESSION["email"]) || isset($_COOKIE["email"]) && isset($_SESSION["website"]) || isset($_COOKIE["website"]) && isset($_SESSION["gender"]) || isset($_COOKIE["gender"])){
        echo "Welcome Back!";
    }
    else{
        echo "Please Try Again!!";
    }
}
?>