<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;color: #8B008B;font-family:Copperplate, Papyrus, fantasy"><br><br><br><br>
        <h1>Welcome to BIT Courier Service</h1><br>
        <h3>The Fastest Courier Service of India</h3><br><br>
    </div>
    <div align='center' style="font-weight: bold;color: #4B0082;font-family:'Times New Roman', Times, serif"><br>
    <br>
        <h1>DBMS MINI PROJECT</h1><br>
        <h2>By :  Saaima Nishat - 1BI19CS133 <br>
                    Prakrithi V - 1BI19CS107
        </h2>
    </div>
</body>
</html>