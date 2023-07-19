<?php
	require_once '../connection.php';
	$msg = "";
	if(isset($_POST['submit'])){
		$target = "../uploads/".basename($_FILES['images']['name']);
		$filename= $_FILES['images']['name'];
		$pname = $_POST['pname'];
		$descr = $_POST['message'];

		$dbselect = mysqli_select_db($con,'portfolio') or die("failed to establish connection");
		$query = "INSERT INTO project(images,projectname,description) values ('$filename','$pname','$descr')";
		$result = mysqli_query($con,$query);
		if(move_uploaded_file($_FILES['images']['tmp_name'], $target)){
			$msg = "file and data uploded successfully";

		}else{
			$msg = "There was a problem during uploading of files";
		}


	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>projectmanager</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<label>Enter the project image</label><br>
		<input type="file" name="images" ><br>
		<label>Project Name</label><br>
		<input type="text" name="pname" value=""><br>
		<label>Enter project description</label><br>
		<textarea name="message" class="textarea" cols="30" rows="10" placeholder="the new bio ..."></textarea>
		<br>
		<input type="submit" name="submit" value="save"><br>
		
	</form>

</body>
</html>