<?php
     session_start();
     include("db.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $email=$_POST['email'];
        $password=$_POST['pass'];
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query="select * from form where email='$email' limit 1";
            $result=mysqli_query($con,$query);
            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['pass']==$password)
                    {
                        header("location: index.php");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('correct username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> for Login and register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1>Login </h1>
        <form  action="index.html" method="POST">
            <label>Email </label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="Submit" name="" value="Submit">
            <p>Not have an account ? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>