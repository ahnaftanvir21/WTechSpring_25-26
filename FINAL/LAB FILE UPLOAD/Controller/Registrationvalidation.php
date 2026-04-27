<?php
include "../Model/db.php";
session_start();
$name = "";
$email= "";
$username="";
$password="";
$website = "";
$gender = "";

$datafile ="../data.json";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    //echo $name;
    $email = $_POST["email"];
    //echo "Email: " .$email;
    $username=$_POST["username"];
    $password = $_POST["password"];
    $file = $_POST["file"];
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

        $formdata = array("Name"=>$name, "email"=>$email ,"website" => $website, "gender" => $gender);
        if(file_exists($datafile)){
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata,true);
        }
        else{
            $tempdata = array();
        }
        $tempdata [] = $formdata;
        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
        if(file_put_contents($datafile,$jsondata)!== false)
            {
                echo "Data Saved";
                }
            else{
                echo "Please Try Again";
            }
        $data = file_get_contents($datafile);
        $mydata = json_decode($data);

        if($file){
            $targetdirectory = "../File/";
            $path = $targetdirectory.basename($file["name"]);
            $result = move_uploaded_file($file["tmp_name"],$path);
        }
        else{
            $path="";
        }
    }
    $database =new db();
    $connection = $database->connection();
    $result = $database->fillform($connection,"info",$name,$email,,$website,$gender);
    if($result){
        //Header("Location: ..view")
    }
    
    if(isset($_SESSION["name"]) || isset($_COOKIE["name"]) && isset($_SESSION["email"]) || isset($_COOKIE["email"]) && isset($_SESSION["website"]) || isset($_COOKIE["website"]) && isset($_SESSION["gender"]) || isset($_COOKIE["gender"])){
        echo "Welcome Back!";
    }
    else{
        echo "Please Try Again!!";
    }
}
?>