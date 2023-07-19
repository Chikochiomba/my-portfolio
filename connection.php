<?php
    $servername= "localhost";
    $username ="root";
    $password = "";
    $db = "portfolio";
    //creating a database connection
    $con = mysqli_connect($servername,$username,$password,$db)or die("failed to establist a connect".mysqli_connect_error());
    
?>