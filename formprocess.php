<?php
//we are adding the connection to the database for query executions;
 require 'connection.php';
 //if a user clicks the 
 if(isset($_POST['send'])){
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //we create a sql query to insert data into the database;
    $query ="insert into feedback(name,phone,email,feedback) values('$fullname','$phone','$email','$message')";
    //checking if the query was successful or not
    if(mysqli_query($con,$query)){
        echo "feedback was sent successfully";
    }else{
        echo "feedback was not sent successfully". $sql . "
" . mysqli_error($con);

    }
//closing the connection
mysqli_close($con);
 }




?>