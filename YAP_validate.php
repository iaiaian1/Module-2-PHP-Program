<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    $usernamePOST = $_POST["usernameFORM"];
    $passwordPOST = $_POST["passwordFORM"];

    $contents = fopen("YAP_users.txt", "r");
    $logincode = 0;

    if(!isset($_SESSION['usernameSESSION']) || empty($_SESSION['usernameSESSION'])){
        //loop to check every line
        while(!feof($contents)){
            $arrM = explode(",",fgets($contents));
            $user = $arrM[0];
            $pass = str_replace(array("\r\n"),"",$arrM[1]);

            //if login success
            if($user == $usernamePOST && $pass == $passwordPOST){
                //echo "Credential check passed";
                //username session declaration
                session_start();
                $_SESSION['usernameSESSION'] = $usernamePOST;
                header("Location: YAP_main.php");
                $logincode = 1;
                exit();
            }
        }
    }
    


    //If not set to 1, print out wrong credentials
    if($logincode == 0){
        session_start();
        $_SESSION['error'] = 'Invalid credential.';
        header("Location: YAP_login.php");
        exit();
    }
fclose($contents);
?>