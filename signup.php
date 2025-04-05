<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fname,lname,email,pass) values('$firstname',' $lastname','$gmail','$password')";

        mysqli_query($con, $query);
        
        echo "<script type='text/javascript'> alert('Sucessfully Registered')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Please Enter Some Valid Informations')</script>";
    }
   }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="images/logo.jpg">
    <title>Login and Register Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>

</html>