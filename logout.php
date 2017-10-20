<html>
<head>
<title>SIMS|Logout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<style type="text/css">
p {
   font-size: 20px;
}
</style>
</head>
<body  background="images/welc.jpg" text="green" >
<br />
<br />
<br />
<br />
<br />
<br />
<center>
<?php
setcookie ("loggedin", "", time() - 3600);
echo '<p class="text-success">You are now Logged out.</p><br>';
echo '<a href="index.html" class="btn btn-success" role="button">Login Again</a>';
?>
</center>
</body>
</html>
