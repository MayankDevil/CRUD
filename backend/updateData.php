<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./updateData.php
-->
<?php

try
{
    require('connection.php');    // connection

    if (isset($_REQUEST['update_btn']))
    {
        /*
            -----------------------
            [ Request ] fetch data
            -----------------------
        */
        $id = $_REQUEST['update_id'];
        $name = $_REQUEST['update_name'];
        $number = $_REQUEST['update_number'];
        $mail = $_REQUEST['update_mail'];
        $pass = $_REQUEST['update_pass'];
        
        /*
            ---------------------------------------
            | query | insert data in table 
            ---------------------------------------
        */
        
        $update_query = "update mytable set username = '$name',emailid= '$mail', contact=$number, passcode='$pass' where id = $id";
        
        $result = mysqli_query($connection, $update_query);

        if (!($result > 0))
        {
            echo("<div class='alert alert-danger w-25 m-5 mx-auto'> Data Not Updated </div>");
        }
        include("closed.php"); // closed
    }
    header('location:../index.php');
}
catch (\Throwable $th)
{
    die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
}

?>
<!-- the end -->