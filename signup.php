<?php
     session_start();
     include("db.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $mobileno=$_POST['mno'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query="insert into form (fname, lname, mno, email, pass) values('$firstname','$lastname','$mobileno','$email','$password')";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Regesiter')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
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
    <div class="signup">
        <h1>Sign Up </h1>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter the first name" required>
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter the last name" required>
            <label>Mobile Number</label>
            <input type="tel" name="mno" placeholder="Enter the Mobile number" required>
            <label>Email Id</label>
            <input type="email" name="email" placeholder="Enter the email id" required>
            <label>Password</label>
            <input type="password" name="pass" placeholder="Enter the password" required>
            <input type="Submit" name="" value="Submit">
            <p>Already have an account ? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>