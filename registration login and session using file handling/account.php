<?php
session_start();
if($_SESSION['em']=="")
{
header('location:index.php');
}
else{
 ?>

<head>
<style>
h3{
	font-size: 30px;
	color: white;
	text-align: center;
	margin-top: 2%;
}
ul{
	list-style-type: none;
	background-color: #8C8889;
	margin: 10px;
}
li{
	display: inline-block;
	padding: 15px;
	margin: 10px 15px 10px 50px;
}
li:hover{
	background-color: #413E3E;
	cursor: pointer;
}
a{
  	font-size: 18px;
  	text-decoration: none;
  	color: white;
}
body{
	background-color:#222222;
	border: 2px solid red;
}

</style>
</head>
<body>
	<div class="main">
  	
    <h3>Welcome to account: <?php echo $_SESSION['em'];?></h3>
  	
  	<ul>
		<!--<a href="account.php">HOME</a>-->
		<li><a href="account.php?chk=8">TEST</a></li>
		<li><a href="account.php?chk=2">FILES</a></li>
		<li><a href="account.php?chk=4">PROPOSALS</a></li>
		<li><a href="account.php?chk=3">MARKS</a></li>
		<li><a href="account.php?chk=6">GALLERY</a></li>
		<li><a href="account.php?chk=7">CONTACT</a></li>
		<li><a href="logout.php">Logout</a></li>
  	</ul>>

		<?php
		@$chk=$_REQUEST['chk'];
		if($chk==4)
		{
		include_once('regis.php');
		}
		else if($chk==3)
		{
		include_once('logi.php');
		}
		else if($chk==2)
		{
		include_once('aboutus.php');
		}
		else if($chk==7)
		{
		include_once('contactus.php');
		}
		else if($chk==6)
		{
		include_once('demo.php');
		}
		else if($chk==8)
		{
		include_once('test.php');
		}
		
		?>	

	</div>
</body>

 
<?php }  ?>