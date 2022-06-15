<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        //check if they  are empty
        if(!empty($user_name) && !empty($password))
        {
            //read from  database
           
            $query ="select * from users where user_name = '$user_name' limit 1";

            
            $result = mysqli_query($con ,$query);
            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    //check if password is correct
                    if($user_data["password"] === $password)
                    {
                        $_SESSION['user_id'] =$user_data['user_id'];
                        header("Location: home.php");
                        die;

                    }
                }
                
            }
            
            echo  "wrong username or password!";
         

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
            <div class><h1>login</h1></div>
            <div class="text">
                
                <input type="text" name="user_name" required>
                <span></span>
                <label >username</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span> </span>
                <label >password</label>
            </div>
           <div class="pass">
               forgot password?
           </div>
            <input type="submit" value="login" ></br>
            <div class="sign">
            new here?<a href="signup.php"> sign-up</a>
            </div>
        </form>

     </div>
</body>
</html>