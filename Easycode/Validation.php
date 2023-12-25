<?php
 session_start();

 $con =mysqli_connect('localhost','root','','register');

 if($con){
    echo "connection succesfull";
 }else{
    echo "no connection";
 }
 

$user = $_POST['username'];  
$pass = $_POST['password'];

$q= "select * from register where  username ='$user'  && password ='$pass'   ";

$result =mysqli_query($con ,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['users']=$user;
    echo'<script>alert("congratulations '.$user.',you are signed in . now you can use code editor. "); window.location.href="editor.php";</script>';
    //header('location:editor.php');
}elseif($num==0){
    echo'<script>alert("no user found"); window.location.href="index.php";</script>';
}
else{
    header('location:errorPage.php');
}

?>