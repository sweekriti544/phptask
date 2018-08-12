<!DOCTYPE html>
<html lang="en">
<head>
  <title>DWIT PICNIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>DWIT PICNIC FORM</h2>
  <form class="form-horizontal" action="food.php">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
	  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	<div class="form-group"> 
	<label class="control-label col-sm-2" for="batch">Batch:</label>
	 <div class="col-sm-offset-2 col-sm-10">
    <div class="radio">
  <label><input type="radio" name="radio[]" value="2018" onClick="set_session('2018');">2018</label>
</div>
<div class="radio">
  <label><input type="radio" name="radio[]" value="2019" onClick="set_session('2019');">2019</label>
</div>
<div class="radio">
  <label><input type="radio" name="radio[]" value="2020" onClick="set_session('2020');">2020</label>
</div>
<div class="radio">
  <label><input type="radio" name="radio[]" value="2021" onClick="set_session('2021');">2021</label>
</div>
</div>
</div>
   <div class="form-group"> 
	<label class="control-label col-sm-2" for="food">Food Preference:</label>
	 <div class="col-sm-offset-2 col-sm-10">
    <div class="radio">
  <label><input type="radio" name="food[]" value="nonveg" onClick="set_session('nonveg');">Non-veg</label>
</div>
<div class="radio">
  <label><input type="radio" name="food[]" value="veg" onClick="set_session('veg');">Veg</label>
</div>
</div>
</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
