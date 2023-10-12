<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./signin.php
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--
        --------------------
        | mother container |
        --------------------
    -->
    <main class="container" id="main">

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="w-50 m-5 mx-auto">

            <div class='h2'> Signin Form </div>
            <!-- (name) -->
            <div class="form-floating my-3">
                <input type="text" name="name" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Username</label>
            </div>
            <!-- (number) -->
            <div class="form-floating my-3">
                <input type="tel" name="number" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Number</label>
            </div>
            <!-- (mail) -->
            <div class="form-floating my-3">
                <input type="email" name="mail" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email-ID</label>
            </div>
            <!-- (password) -->
            <div class="form-floating my-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <!-- (button) -->
            <div class="btn-group">
                <input type="submit" value="Login" name="submit_btn" class="btn btn-dark px-5">
                <input type="reset" value="Reset" name="reset_btn" class="btn btn-outline-primary px-5">
            </div>

        </form>

        <?php
        /*
            -------------------------------------------------
            | ON SUBMIT | 
            -------------------------------------------------
        */
        if (isset($_REQUEST['submit_btn']))
        {
			require('backend/connection.php');		// connection
		    
			include("backend/setTable.php");	// setTable

            /*
                -----------------------
                [ Request ] fetch data
                -----------------------
            */
            $name = $_REQUEST['name'];
            $number = $_REQUEST['number'];
            $mail = $_REQUEST['mail'];
            $pass = $_REQUEST['pass'];

            /*
				---------------------------------------
				| query | insert data in table 
				---------------------------------------
			*/
            
            $insert_query = "insert into mytable(username,passcode,contact,emailid) values('$name','$pass','$number','$mail')";

            $result = mysqli_query($connection, $insert_query);

            if (!($result > 0))
            {
                echo ("<div class='alert alert-danger w-25 m-5 mx-auto'> Data Not Inserted </div>");
            }
            
            include("backend/closed.php"); // closed

            header("location:index.php");   // back index
        }
        ?>

    </main>
    <!--
        ----------
        | script |
        ----------
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>
<!-- the end -->