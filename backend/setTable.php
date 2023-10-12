<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./setTable.php
-->
<?php

    if ($tables = mysqli_query($connection, "SHOW Tables"))
    {
        $isTableGet = false;

        while ($tableheader = mysqli_fetch_assoc($tables))
        {
            if ($tableheader['Tables_in_test'] == 'mytable')
            {
                $isTableGet = true;
            }
        }
        /*
            ----------------------------------------------------
            | query | isTable not set create table
            ----------------------------------------------------
        */
        if (!($isTableGet))
        {    
            $table_query = "Create Table mytable(
                id int NOT NULL AUTO_INCREMENT,
                username char(30),
                passcode  char(30),
                contact int(11),
                emailid char(30),
                isActive bit default 1,
                PRIMARY KEY (id)
            )";

            $result = mysqli_query($connection,$table_query);
        }
    }

?>
<!--  the end -->