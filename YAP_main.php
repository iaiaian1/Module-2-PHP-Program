<?php
    //SIMPLE LOGIN CHECK TO PREVENT USERS NOT LOGGED IN FROM ACCESSING SITE
    session_start();
    if (!isset($_SESSION['usernameSESSION'])){
        header("Location: YAP_login.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainstyles.css">
</head>
<body>
    <div class="out">
        <div class="in">
            <span>Main Page</span>
            <ul>
                <a href="YAP_main.php">Dashboard</a><br><br>
                <a href="YAP_add_emp.php">Add Employee</a><br><br>
                <a href="YAP_payslip_emp.php">Generate Payslip</a><br><br>
                <a href="YAP_logout.php">Logout</a><br>
                <p>Logged in as: <?php echo $_SESSION['usernameSESSION']; ?>
                </p>
            </ul>
        </div>
    </div>
</body>
</html>