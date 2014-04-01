<!DOCTYPE html>
<html>
	<head>
		<title>Carpool for HELP CAT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			html { 
			  background: url(http://imgur.com/cyBLJMy.jpg) no-repeat center center fixed; 
			  background-size: cover;
			  font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
			}

			.col-1 {
				border: 1px solid white; 
				border-radius: 20px;
				width: 300px;
				height: 300px;
				background-color: white;
				box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.333);
			}

			.col-2 {
				font-size: 30px;
				color: white;
				width: 40%;
				float: left;
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<!--?php include "views/fblogin.php"; ?-->
		<div class="panel">
			<button class="btn" onclick="location.href='views/admin.php'">Admin Panel</button>
			<!--<button class="button" onclick="location.href='views/feedback.php'">Feedback</button>-->
			<button class="btn" onclick="window.open('views/feedback.php','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no')">
			Feedback</button>
			<button class="btn" onclick="location.href='views/login.php'">Login</button>
			<button class="btnReg" onclick="location.href='views/reg.php'">Sign Up</button>

		</div>
		<h1>Carpool for HELP CAT</h1>
		<!-- Google Map Embed -->
		<div class="col-1">
			
		</div>
		<div class="col-2">
			<p>Testing one two three</p>
		</div>
	</body>
<html>


