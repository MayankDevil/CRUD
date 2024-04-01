<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./update.php
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
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="">

	<!--
		--------------------
		| mother_container |
		--------------------
	-->
	<div class="container">

		<?php

			require('backend/connection.php');		// connection
		    
		    $user_id = $_REQUEST['id'];		// request implement id
		    
			/*
				---------------------------------------
				| query | select data by table
				---------------------------------------
			*/

			$select_data = "SELECT * FROM mytable WHERE id = {$user_id}";

		    $result = mysqli_query($connection,$select_data);
		
		?>
		<!--
			------------------
			| UPDATE SECTION |
			------------------
		-->
		<div class='section my-5'>

			<?php
		        if (mysqli_num_rows($result) > 0)
		        {
		            while ($row = mysqli_fetch_assoc($result))
		            {
			?>
			
			<form action="backend/updateData.php" class="w-50 mx-auto">
			
				<div class="h2 py-3"> Update Data </div>
				<!-- ( id ) -->
				<div class="d-flex my-3">
			        <label class="w-50"> Userid </label> <input type="text" name="update_id" value="<?php echo $row['id']; ?>" class="form-control" readonly>
			    </div>
				<!-- ( name ) -->
			    <div class="d-flex my-3">
			        <label class="w-50"> Username </label> <input type="text" name="update_name" value="<?php echo $row['username']; ?>" class="form-control">
			    </div>
				<!-- ( number ) -->
			    <div class="d-flex my-3">
			        <label class="w-50"> Number </label> <input type="text" name="update_number" value="<?php echo $row['contact']; ?>" class="form-control">
			    </div>
				<!-- ( mail ) -->
			    <div class="d-flex my-3">
			        <label class="w-50"> Email </label> <input type="text" name="update_mail" value="<?php echo $row['emailid']; ?>" class="form-control">
			    </div>
				<!-- ( passwrod ) -->
			    <div class="d-flex my-3">
					<label class="w-50"> Password </label> <input type="text" name="update_pass" value="<?php echo $row['passcode']; ?>" class="form-control">
			    </div>
				<!-- ( button ) -->
			    <div class="btn-group py-3">
			        <input type="submit" value="Update Data" name="update_btn" class="btn btn-success">
					<input type="reset" class="btn btn-outline-dark px-5">
			    </div>
			
			</form>
			    
			<?php
			        }	// fetch data ----
			    }
			    else
			    {
			        echo("<div class='alert alert-warning w-50 m-5 mx-auto'> Unvalid data! </div>");
			    }
				
				include("backend/closed.php"); // closed    
			?>

		</div>

	</div>
	<!--
		----------
		| script |
		----------
	-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="js/script.js"></script>

</body>

</html>
<!-- the end -->
