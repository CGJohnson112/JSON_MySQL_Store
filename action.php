<?php

require 'db.php';
$mysqli = new mysqli('localhost', 'root', 'root', 'tutorials') or die ("Connection failed.");
//real_escape_string added to allow punctuation when filling out form
$name= $mysqli ->  real_escape_string($_POST['name']);
$description= $mysqli -> real_escape_string($_POST['description']);
$cost= $_POST['cost'];
$rating= $_POST['rating'];

if (isset($_POST['submit'])) {
   //echo $rating;
   $sqlQuery = "INSERT INTO products (name, description, cost, rating) VALUES ('$name', '$description', '$cost', '$rating')";

   if (mysqli_query($mysqli, $sqlQuery)) {
      header("location:index.php");
   } else {
      echo "Error: " . $sqlQuery . " " . $mysqli->error;
   }
mysqli_close($mysqli);
   
} 