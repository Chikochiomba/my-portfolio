<?php
     require_once '../connection.php';
        $msg = "";
     if(isset($_POST['submit'])){
            //the path to store the image
        $target = "../uploads/".basename($_FILES['image']['name']);
        $feed = $_POST['message'];
        $filename = $_FILES['image']['name'];

        $dbselect = mysqli_Select_db($con,'portfolio') or die("failed to establish a connection");
        $query = "INSERT INTO homepage (biography,images) VALUES('$feed','$filename')";
        $result = mysqli_query($con,$query);

        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg = "File and data uploaded successfully";
        }else{
            $msg="There was a problem during uploading of files";
        }

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <label>Biography</label><br>
        <textarea name="message" class="textarea" cols="30" rows="10" placeholder="the new bio ...">
                </textarea><br><br>
        <label>SELECT FILE YOU WANT TO UPLOAD </label><br>
        <input type = "file" name="image" accept=".jpg,.jpeg,.png" ><br><br>
        <input type="submit" name="submit" value="save"><br><br>
        <input type="submit" name="update" value="update"><br>
    </form>
</body>
</html>