<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./closed.php
-->
<?php

   /*
        --------------------------------------------------
        | close connection | if not closed return error
        --------------------------------------------------
    */
    if (!mysqli_close($connection))
    {
        die("<div class='alert alert-warning w-25 m-5 mx-auto'> Connection Unclosed! </div>");
    }

?>
<!-- the end -->