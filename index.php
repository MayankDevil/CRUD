<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./index.php
-->
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MayankDevil </title>
    <!--
    	---------
		| style |
		---------
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body class="">

	<!--
		--------------------
		| mother_container |
		--------------------
	-->
	<div class="container">

		<?php
			include("./header.php");
		?>
		<!--
			------------------
			| create section |
			------------------
		-->
		<div class='section my-3'>

			<div class='conatiner'> This section is for crateing new data </div>

			<form action="sender.php" method="POST" class="w-50 mx-0">

				<div class="py-3">
					<input type="text" name="username" class="form-control" placeholder="Username" require>
				</div>

				<div class="py-3">
					<input type="email" name="email" class="form-control" placeholder="Email-Id" require>
				</div>

				<div class="py-3">
					<input type="tel" name="number" class="form-control" placeholder="Number" require>
				</div>

				<div class="py-3">
					<input type="password" name="password" class="form-control" placeholder="Password" require>
				</div>

				<input type="submit" name="submit_btn" class="btn btn-primary">

				<input type="reset" name="reset_btn" class="btn btn-outline-primary">

			</form>

		</div>

	</div>
	<!--
		----------
		| script |
		----------
	-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="script.js"></script>

</body>

</html>
<!-- the end -->
