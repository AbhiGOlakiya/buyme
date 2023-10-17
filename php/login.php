<?php
session_start();
// Connect to the database
// $db = mysqli_connect('localhost', 'root', '');
// $con = "create database if not exists mydb2";
// mysqli_query($db, $con);

$db1 = mysqli_connect('localhost', 'root', '','mydb1');
$tbl = "create table if not exists mytbl(id int auto_increment primary key,email varchar(30),password varchar(20))";
mysqli_query($db1, $tbl);

// Get the user email and password from the login form
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Execute a SQL query to retrieve the user data from the database
    $sql = "select * from mytbl where email = '$email' and password = '$password'";
    $result = mysqli_query($db1, $sql);
    
    // Check if the user exists in the database and the password is correct
    if ($row = mysqli_fetch_array($result)) {
        // The user login is successful
        // Redirect the user to the appropriate page

        header('Location: head1.php');
    } else {
        // The user login is not successful
        // Display an error message to the user
        echo 'Invalid email or password.';
    }
    
}



// Close the database connection
mysqli_close($db1);

?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />

</head>


<body>
    <form class="main" method="POST" action="head1.php">
        <div class=sub>
            <h1>Login</h1>

            <div class="email">
                <label>Email</label><br>
                <input type="email" placeholder="Enter Email" name="email" autocomplete="current-password" id="email"><br>
            </div>
            <div class="password">
                <label>Password</label><br>
                <input type="password" placeholder="Enter Password" autocomplete="current-password" name="password" id="password">
                <!-- <a href="" class=fpassword>Forgot Password</a> -->
            </div>
            <div class="fpassword"><a href="">Forgot Password</a></div>
            <div class="button">
                <input type="Submit" value="LOGIN" name="submit">
            </div>
            <p>New User? <a href="register.php">Register</a></p>
        </div>
    </form>
    <img src="register.png" alt="">
</body>
    
</html>