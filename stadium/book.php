<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data =check_login($con);
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['password'];
        //check if they  are empty
        if(!empty($user_name) && !empty($email) && !empty($password))
        {
            //save to database
            

        }else
        {
            echo "please enter some valid information!";
        }

    }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
     
     <div class="log">
        <form method="post">
            <div class><h1>BOOKING</h1></div>

            <div class="text">
                <input type="text" name="username" required>
                <span></span>
                <label >username</label>
            </div>
            <div class="text">
                <input type="text" name="email" required>
                <span></span>
                <label >email</label>
            </div>
            <div class="text">
                <input type="text" required>
                <span></span>
                <label >number of sit</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label >password</label>
            </div>
           <div class="pass">
               forgot password?
           </div>
            <input type="submit" value="book" ></br>
            <div class="sign">
            <a href="home.php"> back to home</a>
            </div>
        </form>

     </div>
</body>
</html>