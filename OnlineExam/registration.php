<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style = "background-image:url('assets/img/Beautiful_Background/36.jpg')">
<div class="container">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class = "span4 pull-left">
				<h1 class = "font"><img src="assets/img/note.jpg" class = "pic">&nbsp;&nbsp;Online Examination</h1>
			</div>
			<div class="span4 pull-right">
				<nav class = "nav nav-pills">
					<ul class = "nav">
						<li class = "font"><a href="LogIn.php">Log In</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="page-header" style = "margin-top:60px">
		<h2>Registration Form</h2>
	</div>
	<div class="row thumbnail span5 offset3 registration">
		<form method = "POST" action = "insert.php" class = "form">
			<table align = "center">
				<tr>
					<td>First Name:&nbsp;</td>
					<td><input type = "text" name = "f_name" class = "btn" id = "fname" autofocus /></td>
					<td><div id = 'xfname'>&nbsp;&nbsp;</div></td>
				</tr>
				<tr>
					<td>Last Name:&nbsp;</td>
					<td><input type = "text" name = "l_name" class = "btn" id = "lname" /></td>
					<td><div id = 'xlname'>&nbsp;&nbsp;</div></td>
				</tr>
				<tr>
					<td>E-mail:&nbsp;</td>
					<td><input type = "text" name = "email" class = "btn" id = "Email"/></td>
					<td><div id = 'xemailadd'>&nbsp;&nbsp;</div></td>
				</tr>
				<tr>
					<td>Password:&nbsp;</td>
					<td><input type = "password" name = "password" class = "btn" id = "password"/></td>
					<td><div id = 'xpassword'>&nbsp;&nbsp;</div></td>
				</tr>
				<tr>
					<td>Confirm Password:&nbsp;</td>
					<td><input type = "password" name = "confirmPass" class = "btn" id = "Confpass" /></td>
					<td><div id = 'xcon_password'>&nbsp;&nbsp;</div></td>
				</tr>
			</table>
			<div>
				<center>
					<button class = "btn btn-primary" id = 'validate'>Register</button>
					<button type = 'reset' class = 'btn btn-warning' id = 'reset' />Reset</button>
				</center>
			</div>
		</form>
	</div>
</div>
<script src = 'assets/js/jquery-1.8.3.js' /></script>
<script src = 'assets/js/bootstrap.js' /></script>
<script src = "assets/js/my_js.js"></script>
</body>
</html>