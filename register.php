<html>
<head>

<title>SIMS|Register</title>
<style style="text/css">
body {
  background-image: url("images/students.jpg");
  background-position: 40% 45%;
  background-repeat: no-repeat;
}
</style>
</head>
<body>
<br />
<br />
<br />
<br />
<br />
<br />
			
<center>





<?php
if (Empty($_POST[username])) {
echo "Empty Field UserName! ...  <a href=register.html><b>Try again</a> ";exit;}
elseif (Empty($_POST[password])) {
echo "Empty Field PassWord! ...  <a href=register.html><b>Try again</a> ";exit;}
elseif(is_numeric($_POST[username])){
echo "<b>Accepts only Letters for UserName!! .... <a href=register.html><b>Try again</a> ";exit;}
elseif (strlen($_POST[password]) < 6) {
echo "<b>Too short for your Password!! .... <a href=register.html><b>Try again</a><br>";exit;}
elseif (($_POST[password]) <> ($_POST[password2])) {
 echo "<b>Password did not match!! .... <a href=register.html><b>Try again</a>";exit;}

?>

<?php 

include("config.php"); 

$link = mysql_connect("localhost","root","stark")
or die ("Could not connect to mysql because ".mysql_error());


mysql_select_db($database)
or die ("Could not select database because ".mysql_error());


$check = "select id from $table where username = '".$_POST['username']."';"; 
$qry = mysql_query($check)
or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry); 

if ($num_rows != 0) { 
echo "<b>Sorry,  the username $username is already taken.<br>";
echo "<a href=register.html><b>Try again</a>";
exit; 
} else {


$insert = mysql_query("insert into $table values ('NULL', '".$_POST['username']."', '".$_POST['password']."')")
or die("Could not insert data because ".mysql_error());


	//	}

echo '<span style="color:#000000;text-align:center;"><b>Your user account has been created!<br></span>';
echo '<p style="color: red; text-align: center">
      <b><a href=index.html>log in</a>
      </p>';

}
?>


</th>
</tr>
</td>
</tr>
</body>
</html>
