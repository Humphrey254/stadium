<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //check if they  are empty
        if(!empty($user_name) && !empty($email) && !empty($password))
        {
            //save to database
            //generating random no for user_id
            $user_id = random_num(20);
            $query ="insert into users(user_id,user_name,password,user_email)
             values('$user_id','$user_name','$password','$email')";

            //save
            mysqli_query($con ,$query);
            
            header("Location:home.php");
            die;

        }
        else
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
            <div class><h1>SignUp</h1></div>

            <div class="text">
                <input type="text" name="user_name" required>
                <span></span>
                <label >username</label>
            </div>
            <div class="text">
                <input type="text" name="email" required>
                <span></span>
                <label >email</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label >password</label>
            </div>
           <div class="pass">
               forgot password?
           </div>
            <input type="submit" value="signup" ></br>
            <div class="sign">
            <a href="login.php"> login instead</a>
            </div>
        </form>

     </div>
</body>
</html>