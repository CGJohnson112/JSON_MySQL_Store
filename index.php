<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JSON_MYSQL_Database_Online_store</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php include "script.php";
    require_once('db.php');
    $query = "SELECT * from products";
    $result = mysqli_query($con, $query);


    //SQL command to add upp all the costs and get the total value in the table entry
    $query2 = mysqli_query($con, "SELECT SUM(cost) AS cost FROM products");
    //$result2 = mysqli_query($con, $query2);
    $product2 = mysqli_fetch_assoc($query2);
    $sum = $product2['cost'];

    //SQL command to add upp all the costs and get the average value in the table entry
    $query3 = mysqli_query($con, "SELECT ROUND ( AVG(cost), 2) AS cost FROM products");
    //$result2 = mysqli_query($con, $query2);
    $product3 = mysqli_fetch_assoc($query3);
    $avgCt = $product3['cost'];

    ?>
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Cost</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
      <tbody>
      <tr>    
        <?php
      
        while($product = mysqli_fetch_assoc($result))
        
        {
          
        ?>
          <td><?php echo $product['name'];?></td>
            <td><?php echo $product['description'];?></td>
            
            <td><?php echo $product['cost'];?></td>
            <td><?php echo $product['image'];?></td>
        </tr>    
        <?php
        }
        ?>

    <tr>
      <td>Total Count:</td>
      <td></td>
      <td></td>
          <td><span><?php echo $sum; ?></span></td>

        </tr>
        <tr >
        <td>Average:</td>
        <td></td>
        <td></td>
          <td><span><?php echo $avgCt; ?></span> </td>
        </tr> 
      </tbody>
    </table>
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>