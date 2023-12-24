<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add your Product and Rating</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<form method="post" action="action.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
  </div>


  <div class="form-group">
    <label>Cost</label>
    <input type="number" class="form-control" name="cost" pattern="^\d(\.\d{0,2})?$" step=".01"/>
  </div>

  <div class="form-group">
    <label>Image Link</label>
    <input type="text" class="form-control" name="image">
  </div>

  <select type="number" class="form-select form-select mt-3" name="rating">
    <option value=1>Poor</option>
    <option value=2>Dislike</option>
    <option value=3>Neutral</option>
    <option value=4>Good</option>
    <option value=5>Great!</option>
</select>
  
  <button type="submit" name="submit" class="btn btn-dark">Submit</button> 
</form>







</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>