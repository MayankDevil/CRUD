<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./sender.php
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

</head>

<body>

    <?php

        try
        {   
            require('./connection.php');
            
            require('./tableSet.php')
        }
        catch (\Throwable $th)
        {
            die("<div class='alert alert-danger w-25 m-5 mx-auto'> $th </div>");    
        }
 

        if (isset($_REQUEST['submit_btn']))
        {
            // echo ("".$_REQUEST['name']."".$_REQUEST['pass']."".$_REQUEST['number']."".$_REQUEST['mail']."");

            $query = "insert into myTable values(".$_REQUEST['name']."','".$_REQUEST['pass']."','".$_REQUEST['number']."','".$_REQUEST['mail']."')"
        }
        try
        {   
            $result = mysqli_query($connection, $query);
        }
        catch (\Throwable $th)
        {
            die("<div class='alert alert-danger w-25 m-5 mx-auto'> $th </div>");    
        }

    ?>
    <!--
        ----------
        | script |
        ----------
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
