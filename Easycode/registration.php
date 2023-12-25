<?php
 session_start();

 $con = mysqli_connect('localhost','root','','register');

 if($con){
    echo "connection succesfull";
 }else{
    echo "no connection";
 }



$user = $_POST['username'];
$email = $_POST['emails'];
$pass = $_POST['password'];

$q= "select * from register where username ='$user' && email='$email' && password ='$pass'   ";

$result =mysqli_query($con ,$q);
$num=mysqli_num_rows($result);

if($num==1){
    echo'<script>alert("Usename already exist, kindly use another username");</script>';
}else{
$qy =" INSERT INTO `register`( `username`, `email`, `password`) VALUES ('$user','$email','$pass')";

mysqli_query($con ,$qy);

echo'<script>alert("Registered successfully, now kindly login!"); window.location.href="index.php";</script>';
}

?>