<html>
<head>
<title>SIMS|Student's List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron text-center">
    <h1>Student's List</h1> 
<a href="home.html" class="btn btn-success" role="button">HOME</a>
    </div>
  </div>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>RegNo</th>
        <th>Branch</th>
        <th>Batch</th>
        <th>Email</th>
	<th>Phone</th>
      </tr>
    </thead>
<tbody>
<?php
include("config.php"); 

$link = mysql_connect($server, $db_user, $db_pass) 
or die ("Could not connect to mysql because ".mysql_error());

mysql_select_db($database) 
or die ("Could not select database because ".mysql_error()); 

$query="SELECT * FROM students";

$resource=mysql_query($query,$link);

while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>".$result[6]."</td></tr>";
	} 
?>
</tbody>
</table> 
</div>
</body>
</html>
