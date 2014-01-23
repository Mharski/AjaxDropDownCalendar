
<html>
<head>
	<title>Log In</title>
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
		</div>
	</div>
	<div class="page-header" style = "margin-top:60px">
		<h2>Log In</h2>
	</div>
	<div class="row thumbnail span4 offset3 registration">
		<form method = "POST" action = "insert1.php" class = "form">
			<table align = "center">
				<tr>
					<td>E-mail:&nbsp;</td>
					<td><input type = "text" name = "email" id = "email" class = "btn" /></td>
					<td><div id = 'xemail'></div></td>
				</tr>
				<tr>
					<td>Password:&nbsp;</td>
					<td><input type = "password" name = "password" id = "password" class = "btn" /></td>
					<td><div id = 'xpassword'></div></td>
				</tr>
			</table>
			<div class = "pull-right">
				<button class = "btn btn-primary" id = "login">Log In</button>
			</div>
			<div class="pull-left">
				<a href="registration.php" class = "font1">Don't have an Account??</a>
			</div>
		</form>
	</div>
</div>
<script src = "assets/js/jquery-1.7.1.min.js"></script>
<script src = "assets/js/script.js"></script>
<script src = 'assets/js/jquery-1.8.3.js' /></script>
<script src = 'assets/js/bootstrap.js' /></script>
<script src = "assets/js/my_js.js"></script>
</body>
</html>