<!DOCTYPE html>
<html>
<head>
<title>SIMS|Student Add</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body style="background-color:rgba(255,0,0,0.5);">
<div class="container">
  <div class="jumbotron text-center">
    <h1>Student Search</h1> 
     <a href="home.html" class="btn btn-success" role="button">Home</a>
     <a href="add.html" class="btn btn-warning" role="button">Back</a>  
    </div>
  </div>

<?php
// Required field names
$required = array('name', 'regno', 'branch', 'batch', 'email', 'phone');
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}
if ($error) {
  echo "<center><h3>All fields are required.</h3></center>";
	exit;
}


?>
<?php 

include("config.php"); 

$link = mysql_connect("localhost","root","stark")
or die ("Could not connect to mysql because ".mysql_error());

mysql_select_db($database)
or die ("Could not select database because ".mysql_error());

$check="select * from students where regno ='".$_POST['regno']."';";

$qry = mysql_query($check)
or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry); 


if ($num_rows != 0) { 
echo "<b>Student Detials already exist.<br>";
echo "<a href=add.html><b>Try again</a>";
exit; 
}
else {


$insert = mysql_query("insert into students values ('NULL', '".$_POST['name']."', '".$_POST['regno']."', '".$_POST['branch']."', '".$_POST['batch']."', '".$_POST['email']."', '".$_POST['phone']."')")
or die("Could not insert data because ".mysql_error());

echo '<center><span style="color:#000000;text-align:center;"><b>Student Successfully Added!<br></span>';
echo '<p style="color: red; text-align: center">
      <b><a href="add.html" class="btn btn-default" role="button">Add More</a>
      </p></center>';
}


?>
</body>
</html>
