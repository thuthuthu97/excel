<!DOCTYPE html>
<html>
<head>
	<title>bai5</title>
</head>
<body>
	<form action="" method="POST">
		Name : <input type="text" name="name" value="<?php if(isset($_POST['name']) && $_POST['name'] != NULL) { echo $_POST['name']; } ?>"><br><br>
		E-mail : <input type="text" name="email" value="<?php if(isset($_POST['email']) && $_POST['email'] != NULL) { echo $_POST['email']; }?>"><br><br>
		Website : <input type="text" name="website" value=" <?php if(isset($_POST['website']) && $_POST['website'] != NULL) { echo $_POST['website']; }?>"><br><br>
		Comment : <textarea value="<?php if(isset($_POST['comment']) && $_POST['comment'] != NULL) { echo $_POST['comment']; }?>" name="comment" id="comment" placeholder="Nhận xét..."></textarea><br><br>
		Gender : <br>
		Female <input type="radio" name="gioitinh" value="Nu">
		Male <input type="radio" name="gioitinh" value="Nam"><br><br>
		<input type="submit" name="submit"><br><br>
	</form>
	<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$comment = $_POST['comment'];
	$gender = $_POST['gioitinh'];

	echo "Name : ".$name <br>;
	echo "E-mail : ". $email <br>;
	echo "Website : ".$website <br>;
	echo "Comment : ".$comment <br>;
	echo "Gender : ".$gender <br>;
	?>

</body>
</html>