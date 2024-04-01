<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./delete.php
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MayankDevil</title>
    <!--
        ---------
        | style |
        ---------
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--
		--------------------
		| mother_container |
		--------------------
	-->
	<div class="container">

    <?php

        require('backend/connection.php');    // connection
        
        $user_id = $_REQUEST['id'];     // request implement id

        /*
            ---------------------------------------
            | query | select data by table
            ---------------------------------------
        */
        
        $erase_query = "SELECT isActive FROM mytable WHERE id = {$user_id}";

        $user_code = mysqli_query($connection,$erase_query);

        if (!(mysqli_num_rows($user_code) > 0))
        {
            echo("<div class='alert alert-danger w-50 m-5 mx-auto'> Data Not Updated </div>");
        }
    ?> 
    <!--
        ------------------
        | create section |
        ------------------
    -->
    <div class='section my-5'>
        
        <form action="backend/eraseData.php" class="w-50 mx-auto">
        
            <div class="h2 py-3"> Delete Data </div>
            <!-- ( id ) -->
            <div class="d-flex my-3">
                <label class="w-50"> Userid </label> <input type="text" name="del_id" value="<?php echo $user_id; ?>" class="form-control" readonly>
            </div>
            <!-- ( password ) -->
            <div class="d-flex my-3">
                <label class="w-50"> Password </label> <input type="text" name="del_pass"  class="form-control">
            </div>
            <!-- ( button ) -->
            <div class="btn-group">
                <input type="submit" value="Delete Data" name="del_btn" class="btn btn-success">
                <input type="reset" class="btn btn-outline-dark px-5">
            </div>
        
        </form>
            
        <?php
            include("backend/closed.php"); // closed             
        ?>

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
