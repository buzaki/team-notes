<?php
$con = mysqli_connect("localhost","root","root","c9");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else {
    echo "conncted";
  }
?>