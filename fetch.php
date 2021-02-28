<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
h1 {text-align: center;}
a:hover {
  /* background-color: green; */
}
</style>
<body>
	<div class ="main-div">
		<h1>Here is the data</h1>
		<div class = "center-div">
		 	<div>
				 <table>
					 <thead>
					 <table border="1" cellspacing="5" cellpadding="10"> 
						 <tr>
							 <th>Name  </th>
							 <th>Address </th>
							 <th>Age  </th>
							 <th>Email  </th>
							 <th colspan="2">operation  </th>
 						</tr>	 
 					</thead>	 
					 <tbody>
					 <?php

					include 'connection.php';
					
					$selectquery = " select * from sample.table " ;

					$query = mysqli_query($con,$selectquery);

					$nums = mysqli_num_rows($query);
					

					while($res = mysqli_fetch_array($query)){
					?>
						<!-- // echo $res['Category']."<br>"; -->
						
						<tr>
						<td><?php echo $res['Name'];?></td>
						<td><?php echo $res['address'];?></td>
						<td> <?php echo $res['age'];?></td>
						<td> <?php echo$res['email'];?></td>
						<td><a href="update.php?Name=<?php echo $res['Name']; ?>">Edit</a></td>
						<td><a href="delete.php?Name=<?php echo $res['Name']; ?>">Delete</a></td>
						
					</tr>
					
					<?php	
					}

						?>
					
						
					</tbody>
 				 </table>			 
			</div>	
 		</div>
</body>
</html>