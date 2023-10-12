<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./login.php
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

        <div class="alert alert-info w-25 mx-auto m-5"> UnAble For Task Project[ Status : Active ] </div>

        <form action="#" class="w-50 mx-auto my-5 border p-3">
            
            <div class="h2 py-3"> Login </div>
            <!-- ( id ) -->
            <div class="d-flex my-3">
                <label class="w-50"> Userid </label> <input type="text" name="username" class="form-control">
            </div>
            <!-- ( password ) -->
            <div class="d-flex my-3">
                <label class="w-50"> Password </label> <input type="text" name="password"  class="form-control">
            </div>
            <!-- ( button ) -->
            <div class="d-flex align-items-center justify-content-between">
                <input type="submit" value="Login" name="login_btn" class="btn btn-dark px-5">
                <a class="btn btn-link" id="alert-btn"> Forget Password? </a>
            </div>
        
        </form>

        <?php
        /*
            -------------------------------------------------
            | ON SUBMIT | 
            -------------------------------------------------
        */
        if (isset($_REQUEST['login_btn']))
        {
            /*
        
                session_start(); 
              
                $_SESSION["Rollnumber"] = "11"; 
                $_SESSION["Name"] = "Ajay"; 

                if(isset($_SESSION["Name"])){ 
                    unset($_SESSION["Rollnumber"]); 
                } 
                session_destroy(); 
            */ 

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