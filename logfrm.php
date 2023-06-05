<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="javascript" href="bootstrap.min.js" ></script>
	<script type="javascript" href="jquery.min.js" ></script>
	<title>login</title>
</head>
<body>
	<div class="container">
		
		<div class="row justify-contant-centre mt-5">

			<div class="col-3"></div>
			<div class="col" style="background-color:lightblue;">
			<form method="post" action="pdologin.php">
				<h1 style="align-centre">LOGIN</h1>
				
				<label class="form-lable">User name</label>
				<input type="text" name="uname" class="form-control"><br>

				<label class="form-lable">Password</label>
				<input type="Password" name="pwd" class="form-control"><br>

				<input type="submit" align="btn-centre" name="submit" class="btn btn-success">

	   	</form>
	   </div>
	   <div class="col-3"></div>

		</div>	
	</div>

</body>
</html>