
<?php
session_start();
$_SESSION['name'] = $_GET['name'];
$_SESSION['email']=$_GET['email'];
echo "Name: ".$_SESSION['name'].'<br/>';
echo "Email address: ".$_SESSION['email'];
if(isset($_GET['submit'])){
if(!empty($_GET['radio'])){
foreach($_GET['radio'] as $select){
	echo $select;
}
}
if(!empty($_GET['food'])){
foreach($_GET['food'] as $option){
	echo $option;
}
}
}

?>
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
  <h2>Food Menu</h2>
 <form class="form-horizontal" action="submit.php">
 
<div class="checkbox">
  <label><input type="checkbox" value="lunchset" name="check_list[]">Lunch set</label>
</div>
<div class="checkbox">
 <label><input type="checkbox" value="vegset" name="check_list[]">Veg set</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="momo" name="check_list[]">Mo:mo</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="chowmein" name="check_list[]">Chowmein</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="burger" name="check_list[]">Burger</label>
</div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
	</div>
</form>


