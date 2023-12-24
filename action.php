<?php

//require 'db.php';
$mysqli = new mysqli('localhost', 'root', 'root', 'tutorials') or die ("Connection failed. bozo");
$name= $_POST['name'];
$description= $_POST['description'];
$cost= $_POST['cost'];
$image= $_POST['image'];
$rating= $_POST['rating'];

if (isset($_POST['submit'])) {
   //echo $rating;
   $sqlQuery = "INSERT INTO products (name, description, cost, image, rating) VALUES ('$name', '$description', '$cost', '$image', '$rating')";

   if (mysqli_query($mysqli, $sqlQuery)) {
      echo "Info inserted";
   } else {
      echo "Error: " . $sqlQuery . " " . $mysqli->error;
   }
mysqli_close($mysqli);
   
} 