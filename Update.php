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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

		    try
		    {
			    require('./connection.php');
		    }
		    catch (\Throwable $th)
		    {
			    die("<div class='alert alert-danger w-25 m-5 mx-auto'> $th </div>");
		    }
		    
		    $user_id = $_REQUEST['id'];
		    
		    $result = mysqli_connect($connection,"SELECT * FROM mytable WHERE id = {$user_id}");
		    
		    
		?>
		<!--
			------------------
			| create section |
			------------------
		-->
		<div class='section my-5'>

			<?php
			    
		        if (mysqli_num_rows($result) > 0)
		        {
		            while ($row = mysqli_fetch_assoc($result))
		            {
			?>
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>">
			
			    <div class="">
			        <label> Username </label> <input type="text" name="name" value="<?php echo $row['username']; ?>">
			    </div>
			    <div class="">
			        <label> Number </label> <input type="text" name="number" value="<?php echo $row['contact']; ?>">
			    </div>
			    <div class="">
			        <label> Email </label> <input type="text" name="mail" value="<?php echo $row['emailid']; ?>">
			    </div>
			    <div class="">
			        <label> Password </label> <input type="text" name="pass" value="<?php echo $row['passcode']; ?>">
			    </div>
			    <div class="">
			        <input type="submit" value="Update Data" name="update_btn" class="btn btn-success"><input type="reset" class="btn btn-outlin-dark">
			    </div>
			
			</form>
			    
			
			<?php
			
			        }
			    }
			    else
			    {
			        echo ("<div class='alert alert-warning w-25 m-5 mx-auto'> Unvalid data! </div>");
			    }
		        if (isset($_REQUEST['update_btn']))
		        {
		            $name = $_REQUEST['name'];
		            $number = $_REQUEST['number'];
		            $mail = $_REQUEST['mail'];
		            $pass = $_REQUEST['pass'];
		            
		            $query = "Update mytable set username = {$name}, contact = {$number}, emailid = {$mail}, passcode = {$pass}";
		            
		            $result = mysqli_query($connection, $query);

                    if ($result > 0)
                    {
                        echo ("<div class='alert alert-success w-25 m-5 mx-auto'> mysql query is done </div>");
                    }
                    else
                    {
                        die("<div class='alert alert-danger w-25 m-5 mx-auto'> Data UnUpdated </div>");
                    }       
		        }
		        if (mysqli_close($connection))
                {
                    echo ("<div class='alert alert-success w-25 m-5 mx-auto'> Close Connection! </div>");
                }
                exit();   
			    
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
	<script src="script.js"></script>

</body>

</html>
<!-- the end -->
