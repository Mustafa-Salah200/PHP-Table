<?php

$conn = mysqli_connect('localhost', 'root', '', 'users');

if(isset($_POST["create"])){
    $name =  mysqli_real_escape_string($conn ,$_POST["username"]) ; 
    $email =  mysqli_real_escape_string($conn ,$_POST["email"]) ; 
    $password =  mysqli_real_escape_string($conn ,$_POST["password"]) ;

    $sql = "INSERT INTO user(username,email,password) VALUES ('$name','$email','$password')";
    
    if(mysqli_query($conn,$sql)){
        header("location: ./index.php");
    }
}

if(isset($_GET["id"])){
    $id =  $_GET["id"];
    $sql = "DELETE FROM user WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        header("location: ./index.php");
    }   
}
if(isset($_POST["update"])){
    echo "update";
    $id = $_POST["id"];
    $name =  mysqli_real_escape_string($conn ,$_POST["username"]) ; 
    $email =  mysqli_real_escape_string($conn ,$_POST["email"]) ; 
    $password =  mysqli_real_escape_string($conn ,$_POST["password"]) ;

    $sql = "UPDATE user SET username = '$name', password = '$password' WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        header("location: ./index.php");
        // header["location:index.php"];
    }
}

?>