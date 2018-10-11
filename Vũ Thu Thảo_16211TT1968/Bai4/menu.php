<!DOCTYPE html>
<html>
<head>
	<title>Bai4</title>
</head>
<body>
	<?php

	$khaivi = $_GET['khaivi'];
	// var_dump($khaivi);

	$monchinh = $_GET['monchinh'];

	$trangmieng = $_GET['trangmieng'];

	echo "Thực đơn đã chọn : <br>";

	foreach ($khaivi as $row) {
		echo $row."<br>";
	}

	foreach ($monchinh as $row) {
		echo $row."<br>";
	}

	foreach ($trangmieng as $row) {
		echo $row."<br>";
	}
	?>
</body>
</html>