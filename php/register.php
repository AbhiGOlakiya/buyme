 <?php

    $con = mysqli_connect("localhost", "root", "");
    $sql = "create database if not exists mydb1";
    mysqli_query($con, $sql);
    echo "database created successfully <br>";

    $connection = mysqli_connect("localhost", "root", "", "mydb1");
    $tbl = "create table if not exists mytbl(id int auto_increment primary key,name varchar(20),email varchar(30),password varchar(20))";
    mysqli_query($connection, $tbl);
    echo "table created successfully <br>";

    $connection1 = mysqli_connect("localhost", "root", "", "mydb1");
    if (isset($_POST["submit"])) {
        $a = $_POST['name'];
        $b = $_POST['email'];
        $c = $_POST['password'];
        $value = "insert into mytbl (name,email,password) values('$a','$b','$c')";
        mysqli_query($connection1, $value);

        header('location:login.php');
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link type="text/css" rel="stylesheet" href="register.css">

     
 </head>

 <body>

     <form class="main" method="post" action="">
         <div class=sub>
             <h1>Register Here</h1>
             <div id="something">
                 <div class="name">
                     <label for="name">Name</label><br>
                     <input type="text" placeholder="Enter Name" autocomplete="username" name="name" /><br>
                 </div>
                 <div class="email">
                     <label for="">Email</label><br>
                     <input type="email" placeholder="Enter Email" autocomplete="username" name="email" id="email" /><br>
                 </div>
                 <div class="password">
                     <label for="">Password</label><br>
                     <input type="password" placeholder="Enter Password" autocomplete="current-password" name="password" id="fpassword" />
                 </div>
                 <div class="button">
                     <input type="submit" name="submit" value="REGISTER">
                 </div>
             </div>
             <p>Already User? <a href="login.php">Login</a></p>
         </div>
     </form>
     <img src="register.png" alt="" height="100%" width="100%">
 </body>

 </html>