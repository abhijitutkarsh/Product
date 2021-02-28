<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server ="localhost";
    $username = "root";
    $password = "";

    //create a datebase connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    
    // echo "Success connecting to the db";

    //collect post variables

    $name =$_POST ['name'];
    $address =$_POST['address'];
    $age =$_POST['age'];
    $email =$_POST['email'];
    $password =$_POST ['password'];
    $sql="insert into sample.table ( `name`, `address`, `age`,
     `email`, `password`) 
    VALUES ('$name', '$address', '$age', '$email', '$password');";
    
    // echo $sql;

    //execute the query

    if($con->query($sql) == true){
        //  echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        
    }

    // Close the database connection
    $con->close();
 }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>WELCOME</h3>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Your form is submitted. Thank You</p>";
        }
        ?>
        <form action="index.php" method="post">
            Name:  <input type="text" name="name" id="name" placeholder="Enter the name"><br>
            Address:  <input type="text" name="address" id="address" placeholder="Enter the address:"><br>
            Age:  <input type="number" name="age" id="age" placeholder="Enter the age"><br>
            Email:  <input type="email" name="email" id="email" placeholder="Enter the email"><br>
            Password:  <input type="password" name="password" id="password" placeholder="Enter the password"><br>
            <button class="btn">Submit</button>
            <span><button class="btn"><a href="fetch.php">Show</a></button>
            </span>
        </form>
    </div>
    <!-- <script src ="index.js"></script> -->
   </body>
</html>