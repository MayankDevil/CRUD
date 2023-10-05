<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./connection.php
-->
<?php

try {
    $connection = mysqli_connect("localhost", "root", "", "test");

    if ($connection) {
        echo ("<div class='alert alert-success w-25 m-5 mx-auto'> Connected Successfully! </div>");
    } else {
        exit("<div class='alert alert-warning w-25 m-5 mx-auto'> Connection Failed? </div>");
    }
} catch (\Throwable $th) {
    die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
}

?>
<!-- the end -->