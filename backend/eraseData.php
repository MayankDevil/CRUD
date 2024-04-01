<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./eraseData.php
-->
<?php


try
{
    require('./connection.php');    // connection

    if (isset($_REQUEST['del_btn']))
    {
        /*
            -----------------------
            [ Request ] fetch data
            -----------------------
        */

        $id = $_REQUEST['del_id'];
        $pass = $_REQUEST['del_pass'];
        
        /*
            -------------------------------------------------
            | query | erase table data to isActive disable 
            -------------------------------------------------
        */

        $del_query = "UPDATE mytable SET isActive = 0 WHERE id = {$id} AND passcode = '{$pass}' ";
        
        $result = mysqli_query($connection, $del_query);
        
        if (!($result > 0))
        {
            echo("<div class='alert alert-danger w-50 m-5 mx-auto'> Data Not Updated </div>");
        }
        include("closed.php"); // closed   
    }
    header("location:../index.php");  
}
catch (\Throwable $th)
{
    die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
}

?>
<!-- the end -->
