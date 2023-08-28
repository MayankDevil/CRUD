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
		<div class='section my-5'>

			<div class='conatiner'></div>

			<table class='table'>

				<thead>
					<th> ID </th>
					<th> NAME </th>
					<th> PASSWORD </th>
					<th> EMAIL </th>
					<th> NUMBER </th>
				</thead>
				<!--
					--------------
					| table body |
					--------------
				-->
				<tbody>

					<tr>
						<td> 1 </td>
						<td> Hero </td>
						<td> 1234Seven </td>
						<td> fake@gmail.com </td>
						<td> 9211420420 </td>
					</tr>

				</tbody>

				<tfoot>
					<td colspan="5"> Number of data is 1 </td>
				</tfoot>

			</table>


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
