<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./read.php
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
		
		    include("header.php");

		    try
		    {
			    require('connection.php');
		    }
		    catch (\Throwable $th)
		    {
			    die("<div class='alert alert-danger w-25 m-5 mx-auto'> $th </div>");
		    }
		    
			$select_query = "SELECT * FROM mytable";

		    $result = mysqli_query($connection,$select_query);
		    
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
            
            ?>
			<table class='table border-none'>

				<tr>
					<th> ID </th>
					<th> NAME </th>
					<th> EMAIL </th>
					<th> NUMBER </th>
					<th> ACTION </th>
				<tr>
				<!--
					--------------
					| table body |
					--------------
				-->

				<?php
				
					while ($row = mysqli_fetch_assoc($result))
					{
				
				?>

				<tr>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['username']; ?> </td>
					<td> <?php echo $row['emailid']; ?> </td>
					<td> <?php echo $row['contact']; ?> </td>
					<td class="btn-group"> 
						<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"> Update </a>
						<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"> Delete </a>
					</td>
				</tr>					
				
				<?php
				
					}
				
				?>
			</table>
			
			<?php
			
			    }
			    else
			    {
			        echo ("<div class='alert alert-warning w-25 m-5 mx-auto'> Database Table is Emtpy! </div>");
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
