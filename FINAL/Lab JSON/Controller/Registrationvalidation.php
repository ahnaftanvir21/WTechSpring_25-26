<?php
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
    if(!empty($name) && strlen($name) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email) && !empty($gender)){
        
    }
}
?>