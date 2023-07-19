<?php
require_once '../connection.php';
if(isset($_POST['submit'])){
            //the path to store the image
        $name=$_POST['skillname'];
        $description = $_POST['message'];

        $dbselect = mysqli_Select_db($con,'portfolio') or die("failed to establish a connection");
        $query = "INSERT INTO skills (skillname,description) VALUES('$name','$description')";
        $result = mysqli_query($con,$query);


     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skillmanage</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
     <label>Enter the Skills</label><br>
     <input type="text" name="skillname" value=""><br>
     <label>description</label><br>
     <textarea name="message" class="textarea" cols="30" rows="10" placeholder="the new skill description ...">
                </textarea><br><br>
    <input type="submit" name="submit" value="Save">
    

    </form>

    
</body>
</html>