<?php
$name = "";
$email= "";
$address = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    echo $name;
    $email = $_POST["email"];
    echo "Email" .$email;
    $address = $_POST["address"];
}
?>