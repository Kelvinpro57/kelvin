<?php 

$conn = mysqli_connect('localhost', 'root', '', '');
return $conn;
// I will put the name of the database later 
if (!$conn) {
    die('Unable to connect to Database'. mysqli_connect_error());
}
















?>