<?php
session_start();
error_reporting(1);
if(isset($_POST['b3']))
{
	$_SESSION['em']=$_POST['t4'];
	$_SESSION['pass']=$_POST['t5'];
	if(file_exists("info"."/".$_SESSION['em']))
	{
		echo '<font color="red" size="10">'."you are already registered!!!".'</font>';
	}
	else
	{
		$_SESSION['name']=$_POST['t3'];
		$_SESSION['em']=$_POST['t4'];
		$_SESSION['pass']=$_POST['t5'];
		$_SESSION['add']=$_POST['t6'];
		mkdir("users"."/".$_SESSION['em']);
		$arr=fopen("users"."/".$_SESSION['em']."/".$_SESSION['pass'],"w");
		$data="your name is:".$_SESSION['name']."    "."your email is:".$_SESSION['em']."   "."your password is:".$_SESSION['pass']."    "."your address is:".$_SESSION['add'];
		fwrite($arr,$data);
		header('Location:welcome.php');
	}
}
?>
<html>
<head>
	<style>
		*{
			box-sizing: border-box;
		}
		.registrcont{
			background-color: white;
			padding: 15px;
			width: 60%;
		}
		input{
		  	width: 100%;
		  	padding: 15px;
		  	margin: 5px 0 22px 0;
		  	display: inline-block;
		  	border: none;
		  	background: #f1f1f1;
		}

		input[type=email]:focus, input[type=password]:focus, input[type=text]:focus{
		  	background-color: #ddd;
		  	outline: none;
		}

		hr {
		  	border: 1px solid #f1f1f1;
		  	margin-bottom: 25px;
		}
		.createbtn{
			background-color: #F35574;
		  	color: white;
		  	padding: 16px 20px;
		  	margin: 8px 0;
		  	border: none;
		  	cursor: pointer;
		  	width: 100%;
		  	opacity: 0.9;
		}
		.createbtn:hover{
			opacity: 1;
		}
	</style>
</head>
<body bgcolor="pink">
	<center>
		<form method="post">
			
			<!-- <table border="2" width="300" height="325" cellspacing="0" bgcolor="lavender">
			<tr>
			<td align="center" colspan="2">Registration form</td>
			</tr>
			<tr>
			<td height="26" align="center">Name:</td>
			<td align="center"><input type="text" name="t3" autofocus placeholder="enter ur name" required></td>
			</tr>
			<tr>
			<td height="29" align="center">Email:</td>
			<td align="center"><input type="email" name="t4"  placeholder="enter ur email" required></td>
			</tr>
			<tr>
			<td height="33" align="center">Password:</td>
			<td align="center"><input type="password" name="t5"  placeholder="enter ur password"required></td>
			</tr>
			<tr>
			<td height="167" align="center">Address:</td>
			<td align="center"><textarea rows="5" cols="20" name="t6"required></textarea></td>
			</tr>
			<tr>
			<td height="28" colspan="2" align="center"><input type="submit" name="b3" value="submit"></td>
			</tr>
			</table> -->
			
			<div class="registrcont">
				<h1>Registration</h1>
			    <p>Please fill in this form to create account</p>
			    <hr>

			    <label for="name"><b>Name</b></label>
			    <input type="text" placeholder="Enter Name" name="t3">

			    <label for="email"><b>Email</b></label>
			    <input type="email" placeholder="Enter Email" name="t4">

			    <label for="psw"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="t5">

			    <label for="address"><b>Address</b></label>
			    <input type="text" placeholder="Enter Address" name="t6">

			    <hr>

			    <p><?php echo $err2; ?></p>

			    <button type="submit" class="createbtn" name="b3" value="create">Create account</button>

			</div>
		</form>
	</center>
</body>
</html>
