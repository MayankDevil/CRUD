<!DOCTYPE html>
<!--
-	CRUD "create read update delete"
-	Developed by Mayank
-	CopyRight by Mayank
-	PHP : ./index.php
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

</head>

<body>
    <!--
        --------------------
        | mother container |
        --------------------
    -->
    <main class="container" id="main">
    
        <!--
            ------------------
            | header section | ---------------------
            ------------------
        -->
        <?php
        
            try
            {   
                include("./header.php");
            }
            catch (\Throwable $th)
            {
                die("<div class='alert alert-danger w-25 m-5 mx-auto'> $th </div>");    
            }
        
        ?>
        <!--
            ------------------
            | footer section | ---------------------
            ------------------
        -->
        <footer>
        
            <form action="sender.php" method="post" class="w-50 m-5 mx-auto">

                <div class='h2'> Login Form </div>

                <div class="form-floating my-3">
                    <input type="text" name="name" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Username</label>
                </div>

                <div class="form-floating my-3">
                    <input type="tel" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Number</label>
                </div>

                <div class="form-floating my-3">
                    <input type="email" name="mail" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email-ID</label>
                </div>

                <div class="form-floating my-3">
                    <input type="password" name="number" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="btn-group">

                    <input type="submit" value="Login" name="submit_btn" class="btn btn-dark px-5">
                    <input type="reset" value="Reset" name="reset_btn" class="btn btn-outline-primary px-5">

                </div>
                
            </form>
        
        </footer>
        
        
    </main>
    <!--
        ----------
        | script |
        ----------
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>
