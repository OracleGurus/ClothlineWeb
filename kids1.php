<?php 

	$db= mysqli_connect("localhost", "root", "","kids");
	$sql="SELECT * from  shirt";
	$result=mysqli_query($db, $sql);
	$image="";
	while ($row = mysqli_fetch_array($result)) {

		$image=$row['image'];
		$price=$row['price'];
		$name=$row['name'];

	
	}


 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
	<div>
		<div id="top">
			<h1>KIDS</h1>
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href=""></a></li>
			</ul>
		</div>
		<div class="prod-box">
			<img src="<?php echo '<img src="'.$image.'"';  ?>" alt="accessories">
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="men-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="men-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/kids5.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/kids6.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src=image/kids8.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/kids2.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/kids9.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Kids Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>


	</div>
</body>
</html>
