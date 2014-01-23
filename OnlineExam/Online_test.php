<html>
<head>
	<title>Online Examination</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body style = "background:url('assets/img/Beautiful_Background/36.jpg')">
	<table align="center" cellpadding="1" bgcolor="#FFFFFF" width="1000px" border="1" class = "table">
		<tr>
			<td><center><img src="assets/img/onlineexam.jpg" class = "pic1"></center>
				<center><p style = "font-family:'Tempus Sans ITC'"><b>Online Examination</b></p></center>
				<center><h2><font class = "font" color = "black" style = "font-family:'Tempus Sans ITC'">Computer Literature</font><h2></center>
				<hr><br>
				<form name="cd" class = "time">
					<span class="labe">Remaining Time</span>:
			  			<input name="disp" type="text" class="clock" id="txt" value="10:00" size="10" readonly="true" align="right" border="1" />
			  		<span class="labe">Minutes</span>
			  	</form>
				<br>
				<form>
					<table class = "table1">
						<div id = "load"></div>
						<tr><div id = "QuestionNumber"></div>.)&nbsp;<div id = "QuestionList"></div></tr>
						<tr>&nbsp;&nbsp;<input type = "radio" /><div id = "Choice_A"></div></tr>
						<tr>&nbsp;&nbsp;<input type = "radio" /><div id = "Choice_B"></div></tr>
						<tr>&nbsp;&nbsp;<input type = "radio" /><div id = "Choice_C"></div></tr>
						<tr>&nbsp;&nbsp;<input type = "radio" /><div id = "Choice_D"></div></tr>
					</table>
					<center><button class = "btn btn-success" id = "forward">Submit</button></center>
				</form>
			</td>
	</table>

<script src = 'assets/js/jquery-1.8.3.js' /></script>
<script src = 'assets/js/bootstrap.js' /></script>
<script src = "assets/js/my_js.js" /></script>
<script src = "assets/js/timer.js" /></script>
<script src = "assets/js/ajax.js" /></script>
<script src = "assets/js/jquery.js" /></script>
</body>
</html>