
<?php
$con = mysqli_connect('localhost', 'root', '', 'women');
$sql = "SELECT * FROM skirt order by id ASC" ;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
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
			<h1>WOMEN</h1>
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href=""></a></li>
			</ul>
		</div>
		<div class="prod-box">
			<img src="<?=$row['image']?>" width="175" height="200" alt="accessories"/>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="women-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women.jpg" style="height: 300px">
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women5.jpg" alt="women-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women6.jpg" alt="women-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women8.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women2.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/women9.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Women Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<a href=""><input type="button" value="Add to Cart" ></a>
					</div>
				</div>
		</div>


	</div>
</body>
</html>
