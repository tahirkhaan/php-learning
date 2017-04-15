	<!DOCTYPE html>
	<html>
	<head>
		<title>files uploaded</title>
	</head>
	<body>

	<form method="post" action="files.php" enctype="multipart/form-data">

	<input type="file" name="image"></input><br /><br />
	<input type="submit" name="upload" value="upload now">

	</form>

	</body>
	</html>

<?php

// files to be uploaded

if (isset($_POST['upload']))
{
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_tmp, "$image_name");
	echo "<center><b>image has been uploaded<b></center>";
	echo "<center><img src = '$image_name'></center>";
}

?>
