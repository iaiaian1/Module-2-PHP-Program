<?php
    //SIMPLE LOGIN CHECK TO PREVENT USERS NOT LOGGED IN FROM ACCESSING SITE
    session_start();
    if (!isset($_SESSION['usernameSESSION'])){
        header("Location: YAP_login.php");
    }
    //Open file start
    $payhandle = fopen("YAP_employee.txt",'r');

    //PRINT
    while(!feof($payhandle)){
        $arrP = explode("|",fgets($payhandle));
        $info = explode(",", $arrP[0]);
        $earnings = explode(",", $arrP[1]);
        $deductions = explode(",", $arrP[2]);
        $lastdeductions = str_replace(array("\n"),"",$deductions[2]);

        echo "";
        echo "==========================<br>";
        echo "INDIVIDUAL PAYSLIP<br>";
        echo date("m/d/Y")."<br>".date("h:i:a")."<br>";
        echo "==========================<br>";
        echo "EMPNO: ".$info[0]."<br>";
        echo "Name: ".$info[1].",".$info[2]." ".$info[3]."<br>";
        echo "===Earnings=== <br>";
        echo "Salary: $earnings[0]<br>";
        echo "Allowance: $earnings[1]<br>";
        echo "Overload: $earnings[2]<br>";
        echo "TOTAL EARNINGS: ".($earnings[0]+$earnings[1]+$earnings[2])."<br>";
        echo "===Deductions=== <br>";
        echo "SSS: $deductions[0]<br>";
        echo "Pag-Ibig: $deductions[1]<br>";
        echo "Phil-Health: $deductions[2]<br>";
        echo "TOTAL DEDUCTIONS: ".($deductions[0]+$deductions[1]+$lastdeductions)."<br>";
        echo "===Net Pay=== <br>";
        echo ($earnings[0]+$earnings[1]+$earnings[2])-($deductions[0]+$deductions[1]+$lastdeductions)."<br>";
        echo "===Maniger=== <br>";
        echo "Jake Brian YAP, BSIT 3A <br>";
        echo "============ <br>";
        echo "==========================<br>";




        //fclose($payhandle);
        //exit();
        // if(feof($payhandle)){
        //     exit();
        //     echo"hello world";
        // }

    }
    //Close file
    //exit();
    fclose($payhandle);
?>