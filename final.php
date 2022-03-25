<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$servername="localhost";
$username="root";
$password="";
$db="dsandhultd";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Connection Failed");
}
else{
    $sql="INSERT INTO `business` (`name`, `password`,`email`) VALUES ( '$name', '$pass','$email')";
    if(mysqli_query($conn,$sql)){
        echo "You are Sign Up Please Login Your Account from <a href='index.php'>Log in </a>";
    }
    else{
        echo "Error".mysqli_connect_error();
    }
}

?>