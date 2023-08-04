<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST['uname'];
    $password=$_POST['pwd'];
}

$conn = new mysqli("localhost","root","","app1");

if($conn->connect_error === TRUE){
    die("cannot connect to databse".$conn->connect_error);
}

$sql ="INSERT INTO signup(username,password) value('$name','$password');";

if($conn->query($sql)==TRUE){
    echo "Sign up Succesful";
}
else{
    echo "Error during signup".$conn->error();
}

$conn->close();
?>