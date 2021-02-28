<!-- <?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "my_form";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $category =$_POST ['category'];
   $subcategory =$_POST['subcategory'];
   $nameDescription =$_POST['nameDescription'];
   $barcode =$_POST['barcode'];
   $cost =$_POST ['cost'];
   $sales =$_POST ['sales'];
   $retails =$_POST ['retails'];
   $numberofUnits =$_POST ['numberofUnits'];
   $brand =$_POST['brand'];
           
   // mysql query to Update data
   $query = "UPDATE `table` SET `Category`='$category,`Subcategory`='$subcategory',`Name Description`
   ='$nameDescription',`Barcode`='$barcode',`Cost`='$cost',`Sales`='$sales',`Retails`='$retails',`Number of Units`=
   '$numberofUnits',`Brand`='$brand' WHERE 1";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UPDATE DATA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Add Product!!</h3>
        <?php
        
        ?>
        <form action="update.php" method="post">
            Category:  <input type="text" name="category" id="category" placeholder="Enter the category"><br>
            Subcategory:  <input type="text" name="subcategory" id="subcategory" placeholder="Enter the subcategory:"><br>
            Name Description:  <input type="text" name="nameDescription" id="nameDescription" placeholder="Enter the description"><br>
            Barcode:  <input type="text" name="barcode" id="barcode" placeholder="Enter the barcode"><br>
            Cost:  <input type="text" name="cost" id="cost" placeholder="Enter the Cost"><br>
            Sales:  <input type="text" name="sales" id="sales" placeholder="Enter Sales%"><br>
            Retails:  <input type="text" name="retails" id="retails" placeholder="Enter Retails"><br>
            Number of Units: <input type="text" name="numberofUnits" id="numberofUnits" placeholder="Enter number of units"><br>
            Brand:  <input type="text" name="brand" id="brand" placeholder="Enter the brand"><br>
            
            <input type="submit" name="update" value="Update Data">

            </span>
        </form>
    </div>
    <script src ="index.js"></script>
   </body>
</html> -->
<?php

include "connection.php"; // Using database connection file here

$Name = $_GET['Name']; // get id through query string

$qry = mysqli_query($con,"select * from sample.table where name='$Name'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name =$_POST ['name'];
    $address =$_POST['address'];
    $age =$_POST['age'];
    $email =$_POST['email'];
    $password =$_POST ['password'];
	
    $edit = mysqli_query($con,"update sample.table set `name`='$name',`address`='$address',`age`
    ='$age',`email`='$email',`password`='$password'");
	
    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:fetch.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "mysqli_error()";
    }    	
}
?>

<h3>Update Data</h3>

<form  method="post">
            Name:  <input type="text" name="name" id="name" placeholder="Enter the name"><br>
            Address:  <input type="text" name="address" id="address" placeholder="Enter the address:"><br>
            Age:  <input type="number" name="age" id="age" placeholder="Enter the age"><br>
            Email:  <input type="email" name="email" id="email" placeholder="Enter the email"><br>
            Password:  <input type="password" name="password" id="password" placeholder="Enter the password"><br>
             <input type="submit" name="update" value="Update">
            
            </span>
        </form>


        