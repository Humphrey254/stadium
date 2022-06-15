<?php
session_start();

    include("connection.php");
    include("functions.php");
    // $user_data =check_login($con);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>home page</title>
</head>
<body>
    <div class="navbar">
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="logo"><h1>stad<span>ium</span></h1> </div>
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="#hero">home</a></li>
                    <li><a href="#service">services</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#project">book</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </section>
   
</body>
</html>