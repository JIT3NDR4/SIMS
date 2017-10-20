<!DOCTYPE html>
<html>
<head>
<title>SIMS|Student Detials</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body style="background-color:rgba(255,0,0,0.5);">
<div class="container">
  <div class="jumbotron text-center">
    <h1>Student Search</h1> 
     <a href="home.html" class="btn btn-success" role="button">Home</a>
     <a href="studentsearch.html" class="btn btn-warning" role="button">Back</a>  
    </div>
  </div>

<?php 
include("config.php"); 

$link = mysql_connect($server, $db_user, $db_pass) 
or die ("Could not connect to mysql because ".mysql_error());

mysql_select_db($database) 
or die ("Could not select database because ".mysql_error()); 

$query="select * from students where regno ='".$_POST['regno']."';";
//
$result = mysql_query($query);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo "<center>";
echo  "<h2>Name :$row[1]</h2>";
echo  "<h2>RegNo :$row[2]</h2>";
echo  "<h2>Branch :$row[3]</h2>";
echo  "<h2>Batch :$row[4]</h2>";
echo  "<h2>Email :$row[5]</h2>";
echo  "<h2>Phone :$row[6]</h2>";
echo "</center>";
 
?>

</body>
</html>
