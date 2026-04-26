<?php
    class db{
        function connection(){
            $db_host = "localhost";
            $db_user="root";
            $dp_password="";
            $db_name="register";

            $connection = new mysqli($db_host, $db_user, $dp_password,$db_name);
            if($connection->connect_error){
                die("Please Conncet the Database".$conncection->connect_error);
            }
            return $connection;
        }
        function fillform($connection, $tablename,$name,$email,$website,$gender){
            $sql = "INSERT INTO ".$tablename."(name,email,website,gender) VALUES('".$name."','".$email."','".$website."','".$gender."')";
            $result = $connection->query($sql);
            return $result;
        }
    }
?>