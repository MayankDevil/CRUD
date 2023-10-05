<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./eraseData.php
-->
<?php


try{
    try
    {
        require('./connection.php');
    }
    catch (\Throwable $th)
    {
        die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
    }

    if (isset($_REQUEST['update_btn']))
    {
        $id = $_REQUEST['del_id'];
        $pass = $_REQUEST['del_pass'];
        $code = $_REQUEST['del_code'];

        if ($pass == $code)
        {
            $del_query = "";
            
            // echo $del_query;
            
            $result = mysqli_query($connection, $update_query);
            
            if ($result > 0)
            {
            echo ("<div class='alert alert-success w-25 m-5 mx-auto'> mysql query is done </div>");
            }
            else
            {
                die("<div class='alert alert-danger w-25 m-5 mx-auto'> Data UnUpdated </div>");
            }       
        }
        else
        {
            header("location:delete.php");
        }
    }
    header("location:index.php");
}
catch (\Throwable $th)
{
    die("<div class='alert alert-danger w-50 m-5 mx-auto'> $th </div>");
}

?>
<!-- the end -->