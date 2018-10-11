<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
	require 'product.php';
	 //var_dump($product);
	foreach ($product as $key=>$row) {
	?>
		<div class='sanpham'>
		<img src='public/images/<?php echo $row['image']?>'>
		<h1><a href='detail.php?id=<?php echo $key ?>'><?php echo $row['name']?></a></h1>
		<b>Giá: </b> <span class='gia'><?php echo $row['price'] ?></span><br>
		<p><?php echo substr($row['desc'],0,80) ?><a href='detail.php?id=<?php echo $key ?>'>[...]</a></p>
	</div>
	<?php } ?>
</body>
</html>
