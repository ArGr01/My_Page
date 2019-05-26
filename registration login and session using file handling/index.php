<?php
session_start();
error_reporting(1);
if(isset($_POST['b1']))
{
	$email=$_POST['t1'];
	$password=$_POST['t2'];
	if($email=="" || $password=="")
	{
		$err= '<font color="red" size="6">Please fill user name and password first!!</font>';
	}
	else
	{
	
		if(file_exists("users/$email") && file_exists("users/$email/$password"))
		{
			$_SESSION['em']=$email;
			header('location:account.php');
		}
		else
		{
			$err= '<font color="red" size="6">wrong user name or password</font>';
		}
	}
}

?>

<html>
<head>
	<style>
		*{
			box-sizing: border-box;
		}
		.logcont{
			padding: 16px;
			background-color: white;
			width: 60%;
			height: 100%;
		}
		
		input{
		  	width: 100%;
		  	padding: 15px;
		  	margin: 5px 0 22px 0;
		  	display: inline-block;
		  	border: none;
		  	background: #f1f1f1;
		}

		input[type=email]:focus, input[type=password]:focus {
		  	background-color: #ddd;
		  	outline: none;
		}

		hr {
		  	border: 1px solid #f1f1f1;
		  	margin-bottom: 25px;
		}

		.signinbtn, .registrbtn {
		  	background-color: #4CAF50;
		  	color: white;
		  	padding: 16px 20px;
		  	margin: 8px 0;
		  	border: none;
		  	cursor: pointer;
		  	width: 100%;
		  	opacity: 0.9;
		}

		.registrbtn{
			background-color: black;
		}

		.signinbtn:hover {
		  	opacity: 1;
		}

		.registrbtn:hover{
			opacity: 1;
		}

		a {
			color: white;
		  	text-decoration: none;
		}

		.signin {
		  	background-color: #f1f1f1;
		  	text-align: center;
		}
	</style>
</head>
<body bgcolor="#c23636">
<center>
<form method="post">
	<div class="logcont">
	<!--
	<table border="2" width="300" height="174" cellspacing="0" bgcolor="orange">
		<tr>
			<td colspan="2"><?php echo $err; ?></td>
		</tr>
		<tr>
			<td height="50" colspan="2" align="center">Login Page</td>
		</tr>
		<tr>
			<td height="38" align="center">Email:</td>
			<td align="center"><input type="email" name="t1" autofocus placeholder="enter ur email">
		</tr>
		<tr>
			<td height="49" align="center">Password:</td>
			<td align="center"><input type="password" name="t2" autofocus placeholder="enter ur password">
		</tr>
		<tr>
			<td height="33" colspan="2" align="center">
				<input type="submit" name="b1" value="sign in">
				<a href="registration.php">New user ? Click here</a>
			</td>
		</tr>
	</table>
	-->
		<h1>Sign in</h1>
	    <p>Please fill in this form to sign in</p>
	    <hr>

	    <label for="email"><b>Email</b></label>
	    <input type="email" placeholder="Enter Email" name="t1">

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="t2">

	    <hr>

	    <p><?php echo $err; ?></p>

	    <button type="submit" class="signinbtn" name="b1" value="sign in">Sign in</button>

	    <button type="submit" class="registrbtn">
	    	<a href="registration.php">New User? Click for registration</a>
	    </button>
	</div>
</form>
</center>
</body>
</html>



