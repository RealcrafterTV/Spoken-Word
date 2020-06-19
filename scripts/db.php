<?php

$con = mysqli_connect("localhost","root","JoJo1601","poetry_slam","3306"); // 
$con = mysqli_connect("localhost","root","password","poetry_slam","3306"); // 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>