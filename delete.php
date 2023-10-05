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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>

    <!--
		--------------------
		| mother_container |
		--------------------
	-->
	<div class="container">

    <?php

        // include("./header.php");

        try
        {
            require('./connection.php');
        }
        catch (\Throwable $th)
        {
            die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
        }
        
        $user_id = $_REQUEST['id'];
        
        $user_code = mysqli_query($connection,"SELECT passcode FROM mytable WHERE id = $user_id");
    ?>
    <!--
        ------------------
        | create section |
        ------------------
    -->
    <div class='section my-5'>

        <?php
            if (mysqli_num_rows($user_code) > 0)
            {
        ?>
        
        <form action="eraseData.php" class="w-50 mx-auto">
        
            <div class="h2 py-3"> Delete Data </div>

            <div class="d-flex my-3">
                <label class="w-50"> Userid </label> <input type="text" name="del_id" value="<?php echo $user_id; ?>" class="form-control" readonly>
            </div>
            <div class="d-flex my-3">
                <label class="w-50"> Password </label> <input type="text" name="del_pass"  class="form-control">
            </div>
            <div class="btn-group">
                <input type="submit" value="Delete Data" name="del_btn" class="btn btn-success">
                <input type="reset" class="btn btn-outline-dark px-5">
            </div>
        
        </form>
            
        <?php
        
            }
            else
            {
                echo ("<div class='alert alert-warning w-25 m-5 mx-auto'> Unvalid data! </div>");
            }
            
            if (mysqli_close($connection))
            {
                echo ("<div class='alert alert-success w-25 m-5 mx-auto'> Close Connection! </div>");
            }
            exit();   
            
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
    <script src="script.js"></script>
</body>

</html>