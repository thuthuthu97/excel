<?php
include ('./users.php');
$obj_users = new users();
$users = $obj_users->getUser();
var_dump($users);
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="./public/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./public/css/type-12.css">

<script src="./public/js/jquery-2.1.4.min.js"></script>
<script src="./public/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<div class="type-12">
		<div class="container-fluid">
			<h2 class="type">Our team</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 class">
					<div class="hover"¹¹>
						<div class="images">
							<img src="public/images/photo_1.jpg" class="imgAlt">
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JOHNSON</h3></a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 class">
					<div class="hover">
						<div class="images">
							<img src="public/images/photo_2.jpg" class="imgAlt">
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JOHNSON</h3></a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 class">
					<div class="hover">
						<div class="images">
							<img src="public/images/photo_3.jpg" class="imgAlt">
						</div>
						<div class="tieude">
							<a href="#"><h3>ROBERT JOHNSON</h3></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- /Services section -->
</body>
</html>