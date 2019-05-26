<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<style>
			h1{
				font-size:28px;
				font-weight:bold;
				font-family:"Trebuchet MS",Arial, Helvetica, sans-serif;
				background-color:#222222;
				border: 10px solid rgba(0, 0, 0, 0);
				color: white;
				margin-left: 2%;
			}
			p{
				color: white;
				margin-left: 3%;
				font-size: 18px;
			}

		</style>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<h1>Your proposals</h1>
		<p>you can propose new style for our website</p>
		<p>paste files (.png, .jpg, .gif, .zip), they will appear in the "uploads" directory</p>
		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul>
				<!-- The file uploads -->
			</ul>

		</form>
        
		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>

	</body>
</html>