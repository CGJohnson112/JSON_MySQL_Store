<?php
//first three lines are troubleshooting code 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$mysqli = new mysqli('localhost', 'root', 'root', 'tutorials') or die ("Connection failed. bozo");

$sql = "SELECT * FROM products";
    $results = $mysqli->query($sql);
    while($product = $results->fetch_assoc()){   
        //can enter any category in your phpmyadmin SQL table you like,
        //only set up to enter entire array into data.json
        $products[] = $product;   
    }
    $file_name = 'data.json';
    $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    file_put_contents($file_name, $encoded_data);

    $query = "SELECT * from products";
    $result = mysqli_query($mysqli, $query);

    //SQL command to add upp all the costs and get the total value in the table entry
    $query2 = mysqli_query($mysqli, "SELECT SUM(cost) AS cost FROM products");
    $product2 = mysqli_fetch_assoc($query2);
    $sum = $product2['cost'];

    //SQL command to add upp all the costs and get the average value in the table entry
    $query3 = mysqli_query($mysqli, "SELECT ROUND ( AVG(cost), 2) AS cost FROM products");
    $product3 = mysqli_fetch_assoc($query3);
    $avgCt = $product3['cost'];

    //SQL command to add upp all the ratings and get the average value in the table entry
    $query4 = mysqli_query($mysqli, "SELECT ROUND ( AVG(rating), 2) AS rating FROM products");
    $product4 = mysqli_fetch_assoc($query4);
    $avgCt2 = $product4['rating'];

