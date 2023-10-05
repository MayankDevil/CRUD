<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./setTable.php
-->
<?php

if ($tables = mysqli_query($connection, "SHOW Tables")) {

    $isTableGet = false;

    while ($tableheader = mysqli_fetch_assoc($tables)) {
        // print_r($tableheader);

        if ($tableheader['Tables_in_test'] == 'mytable') {
            $isTableGet = true;
        }
        // print_r("<div>".$tableheader['Tables_in_test']."</div>");
    }
    if (!($isTableGet)) {
        $table_query = "Create Table mytable(
            id int NOT NULL AUTO_INCREMENT,
            username char(30),
            passcode  char(30),
            contact int(11),
            emailid char(30),
            PRIMARY KEY (id)
        )";
        // $query = "Create Table mytable(
        //     username char(30),
        //     passcode  char(30),
        //     contact int(11),
        //     emailid char(30)
        // )";
    }
}

?>
<!--  the end -->