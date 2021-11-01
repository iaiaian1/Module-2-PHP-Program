<?php
//1/2 Small PHP Code for ERROR design.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="main-div">
        <div class = "inside">
            <span class="login">Login Page</span>
            <br>
            <br>
            <form action="YAP_validate.php" method="POST">
                <label for="username">Username: </label>
                <input type="text" name = "usernameFORM" class = "username" placeholder="Username.." required>
                <br><br>
                <label for="password">Password: </label>
                <input type="password" name="passwordFORM" class = "password" placeholder="Password.." required>
                <br><br>
                <input type="submit" class = "submit">
                
                <!-- Simple check if an account is logged in -->
                <p>Logged in as: 
                    <?php 
                        if (!isset($_SESSION['usernameSESSION'])){
                            echo "No account logged in.";
                        }else{
                            echo $_SESSION['usernameSESSION'];
                        }
                    ?>
            </form>
            <br>
            
            <!-- 2/2 SMALL ERROR DESIGN CODE -->
            <p class="errormessage"><?php
                    // if(isset($_SESSION["error"])){
                    //     $error = $_SESSION["error"];
                    //     echo "<span>$error</span>";
                    // }
                    if (isset($_SESSION['error']))
                    {
                         echo $_SESSION['error'];
                         unset($_SESSION['error']);
                    }
                ?></p>
                           
        </div>
    </div>
</body>
</html>