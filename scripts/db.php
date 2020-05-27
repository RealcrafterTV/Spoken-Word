<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

$con = mysqli_connect("localhost","root","JoJo1601","poetry_slam","3306");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>