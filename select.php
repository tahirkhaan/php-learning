<!DOCTYPE html>
<html>

<head>
	<title>Select.php</title>
</head>

<body>
	<h1 align="center"><?php echo @$_GET['deleted']; ?></h1>
	<h1 align="center"><?php echo @$_GET['updated']; ?></h1>

	<table width="800px" border="5" align="center">
		<tr>
			<th>Seriel No:</th>
			<th>Student Name:</th>
			<th>Father Name:</th>
			<th>School Name</th>
			<th>Roll Number</th>
			<th>Status</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'school';
		$con = new mysqli($host, $user, $pass, $db);

		if (!$con)
		{
			die("connection failed:" . mysqli_connect_error());
		}

		$query = "SELECT * FROM students";
		$run = mysqli_query($con, $query);

		while ($row = mysqli_fetch_array($run))
		{
			$id = $row['id'];
			$s_name = $row['student_name'];
			$f_name = $row['father_name'];
			$school_name = $row['school_name'];
			$roll_no = $row['roll_num'];
			$s_result = $row['result'];
			?>
			<tr>
				<td>
					<?php echo $id;?>
				</td>
				<td>
					<?php echo $s_name; ?>
				</td>
				<td>
					<?php echo $f_name; ?>
				</td>
				<td>
					<?php echo $school_name; ?>
				</td>
				<td>
					<?php echo $roll_no; ?>
				</td>
				<td>
					<?php echo $s_result; ?>
				</td>
				<td><a href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
				<td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>