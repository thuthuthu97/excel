<?php
include ('./users.php');
$obj_users = new users();
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
			<form class="box" >
				<input type="text" id="search" name="keyword" placeholder="Search...">
				<button class="icon"><i class="fa fa-search"></i></button>
			</form><br><br>
			<div class="row">
				<?php
				//$getUser = $obj_users->getUser();
				$keyword = '';
				if (isset($_GET['keyword'])) {
					$keyword = $_GET['keyword'];
				}
				$findKey = $obj_users->findKey($keyword);
				foreach ($findKey as $row) {
				?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 class">
					<div class="hover">
						<div class="images">
							<a href="cau5.php?id=<?php echo $row['id']?>"><h2>Xóa</h2></a>
							<a href="capnhat.php?id=<?php echo $row['id']?>"><h2>Cập nhật</h2></a>
							<img src="public/images/<?php echo $row['images']?>" class="imgAlt">
						</div>
						<div class="tieude">
							<a href="#"><h3><?php echo $row['username']?></h3></a>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>	
	</div>
	<!-- /Services section -->
</body>
</html>