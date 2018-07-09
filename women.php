<?php 
	include "admin.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Women</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
 </head>
 <body>
 	<div  id="cont" style="background-color: grey; width: 75%; height: 600px; margin-top: 10px; float: right;">
 		<h1>Women</h1>
 		<form method="post" enctype="multipart/form-data">

 			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
 			<input type="text" name="price" placeholder="input price"><br>
 			<input type="file" name="image"	><br>
 			<input type="text" name=" name" placeholder="input name"><br>
 			<input type="submit" value="upload" name="submit">
 		</form>
 		<?php

 			if (isset($_POST['submit'])) {
 				$price=$_POST['price'];
 				$name=$_POST['name'];
 				$target_path ="imagesupload/";
 				$target_path=$target_path.basename($_FILES['image']['name']);
 				if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
 					$conn=mysqli_connect("localhost","root","","women");

 					$sql="INSERT into skirt(price,image,name) values('$price','$target_path','$name') ";

 					if ($conn->query($sql)==TRUE) {
 						echo "<br><br>";
 					}else{
 						echo "ERROR:".$sql.$conn->error;
 					}
 				}
 			}


 		  ?>
 	</div>
 </body>
 </html>