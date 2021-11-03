<?php
    session_start();
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    //MAIN
    $employeenumberPOST = $_POST["employeenumberFORM"];
    $lastnamePOST = $_POST["lastnameFORM"];
    $firstnamePOST = $_POST["firstnameFORM"];
    $middlenamePOST = $_POST["middlenameFORM"];
    //EARNINGS
    $salaryPOST = $_POST["salaryFORM"];
    $allowancePOST = $_POST["allowanceFORM"];
    $overloadPOST = $_POST["overloadFORM"];
    //DEDUCTIONS
    $sssPOST = $_POST["sssFORM"];
    $pagibigPOST = $_POST["pagibigFORM"];
    $philhealthPOST = $_POST["philhealthFORM"];


    $myfile = "YAP_employee.txt";
    $handle = fopen($myfile, 'a');
    fwrite($handle,"\n$employeenumberPOST,$lastnamePOST,$firstnamePOST,$middlenamePOST|$salaryPOST,$allowancePOST,$overloadPOST|$sssPOST,$pagibigPOST,$philhealthPOST");
    fclose($handle);

    //2/2 SMALL DESIGN FOR SUCCESS POPUP
    $_SESSION['success'] = 'Add employee success.';
    header("Location: YAP_add_emp.php");
?>