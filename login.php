 <html>
 <head>
<title>SIMS|LogIn</title>
<style style="text/css">
body {
  background-image: url("images/students.jpg");
  background-position: 40% 45%;
  background-repeat: no-repeat;
}
</style>
</head>
 </head>
<body>
<br />
<br />
<br />
<br />
<br />
<br />
<center>
<h3>Logging in..</h3>
<img src="images/loader.gif"  width="150" height="150" border="0">
</center>

<?php
ob_start();

include("config.php"); 

// connect to the mysql server 
$link = mysql_connect($server, $db_user, $db_pass) 
or die ("Could not connect to mysql because ".mysql_error()); 

// select the database 
mysql_select_db($database) 
or die ("Could not select database because ".mysql_error()); 

$match = "select id from $table where username = '".$_POST['username']."' 
and password = '".$_POST['password']."';"; 

$qry = mysql_query($match) 
or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) { 

		
echo  '<center><span style="color:red;text-align:center;"><b>Sorry, there is no username with the specified password.<br></span></center>'; 
echo '<center><button id="retry" class="float-left submit-button" >RETRY</button></center>

<script type="text/javascript">
    document.getElementById("retry").onclick = function () {
        location.href = "index.html";
    };
</script>'; 
exit; 
} else { 

setcookie("loggedin", "TRUE", time()+(3600 * 24));
setcookie("mysite_username", "$username");


echo '<center><span style="color:green;text-align:center;"><h2><b>You are now logged in!</h2><br></span></center>';
echo '<p style="color: red; text-align: center">';




}
ob_end_flush();
?>
</th>
</tr>
</td>
</tr>
<button id="myButton" class="float-left submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "home.php";
    };
</script>'
 </b></center>
 </body>
 </html>
