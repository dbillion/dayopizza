<?php

// connect to database

// $conn=mysqli_connect('localhost','dayo','1234','dayo_pizzaz','3309');
$conn=mysqli_connect('localhost','deeyo','1234','dee_pizza','3309');
 
// check 🔂 connection

if(!$conn){
  echo 'connection error'.mysqli_connect_error();
}
?>