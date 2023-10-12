<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./connection.php
-->
<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    /*
        -----------------------------------------------
        | connection | if unstable return warning
        -----------------------------------------------
    */

    $connection = mysqli_connect($host,$username,$password,$database);

    if (!$connection)
    {
        die("<div class='alert alert-warning w-25 m-5 mx-auto'> Connection Unestablished! </div>");
    }
?>
<!-- the end -->