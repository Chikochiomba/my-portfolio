<?php
require_once '../connection.php';
if(isset($_POST['submit'])){
            //the path to store the image
        $toolname=$_POST['toolname'];

        $dbselect = mysqli_Select_db($con,'portfolio') or die("failed to establish a connection");
        $query = "INSERT INTO tools (toolist) VALUES('$toolname')";
        $result = mysqli_query($con,$query);


     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
     <label>Enter the tools</label><br>
     <input type="text" name="toolname" value=""><br>
    <input type="submit" name="submit" value="Save">
    

    </form>

    
</body>
</html>