<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Logged in</title>
    <style>
        button:hover{
            width: 100px;
            height:50px;
            background-color: burlywood;
            color: white;
        }
    </style>
</head>
<body>
    <div >
       <h1 style="color:green; text-align: center; 
       padding-top: 10%;">Congratulation's ,You are Signed </h1>
        <br>
        <br>
        <div style="padding-left:45%;">
        <button style="border: 2px solid black;height:40px;width:90px;background-color:antiquewhite;" id="stcode"><a href="editor.php"> Start Coding</a></button>
        <br>
        <br>
       <span style="border: 2px solid black;height:40px;width:90px;" >
       <button ><a href="index.php" >SignOut</a></button>
       </span>
       </div>   
    </div>
</body>
</html>