<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- <div class="image-about-banner" style="margin-top:100px"> -->
<div id="main">
<div id="login">
<?php echo @$error; ?>
<h2>Forgot Password</h2>
<br>
<form method="post" action=''>
		<label>Email ID :</label>
		<input type="password" name="email" id="name" placeholder="Email ID"/><br /><br />
	    <input type="submit" value="login" name="forgot"/><br />
</form>
</div>
</div>
<!-- </div> -->
</body>
</html>