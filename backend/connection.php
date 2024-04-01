<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./connection.php
-->
<?php

    $host = "sql105.infinityfree.com";
    $username = "if0_36284680";
    $password = "";
    $database = "if0_36284680_crud";

    /*
        -----------------------------------------------
        | connection | if unstable return warning
        -----------------------------------------------
    */

    $connection = mysqli_connect($host,$username,$password,$database);

    if (!$connection)
    {
        die("<div class='alert alert-warning w-50 m-5 mx-auto'> Connection Unestablished! </div>");
    }
?>
<!-- the end -->
