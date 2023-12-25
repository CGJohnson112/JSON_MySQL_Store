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
    <?php 
    require_once('db.php');
    
    ?>
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Cost</th>
      <th scope="col">Rating</th>
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
            <td><?php echo $product['rating'];?></td>
        </tr>    
        <?php
        }
        ?>
    <!--added spacer for totals and average sections of table-->
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <!--end spacer-->
      
    <tr>
      <td><b>Total Price Count:<b></td>
      <td></td>
      <td><span><b><?php echo $sum; ?></b></span></td>
      <td></td>
    
        </tr>
        <tr >
          <td><b>Average Cost of Single Item:</b></td>
          <td></td>
          <td><span><b><?php echo $avgCt; ?></b></span> </td>
          <td></td>
        </tr>
        <tr >
        <td><b>Rating Average</b>:</td>
        <td></td>
        <td><span><b><?php echo $avgCt2; ?></b></span> </td>
        <td></td>
          
        </tr> 
      </tbody>
    </table>

    <button type="submit" onclick="window.location.href='form.php'" class="btn btn-danger">Go to form</button> 
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
