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
    <link rel="stylesheet" href="add_emp.css">
</head>
<body>
    <div class="main">
        <form action="add_action.php" method="POST">
            <div class="above">
                <span class = "introspan">Add Employee</span>
                <br><br>
                <label for="employeenumber">Employee Number: </label>
                <input type="text" name = "employeenumberFORM" class = "employeenumber" placeholder="Employee number.." required>
                <br><br>
                <label for="lastname">Last name: </label>
                <input type="text" name = "lastnameFORM" class = "lastname" placeholder="Last name.." required>
                <br><br>
                <label for="firstname">First name : </label>
                <input type="text" name = "firstnameFORM" class = "firstname" placeholder="First name.." required>
                <br><br>
                <label for="middlename">Middle name: </label>
                <input type="text" name = "middlenameFORM" class = "middlename" placeholder="Middle name.." required>
                <br><br>
            </div>
            <div class="inline">
                <span>Earnings</span>
                <br><br>
                <label for="salary">Salary: </label>
                <input type="number" name = "salaryFORM" class = "salary" placeholder="Salary.." required>
                <br><br>
                <label for="allowance">Allowance: </label>
                <input type="number" name = "allowanceFORM" class = "allowance" placeholder="Allowance.." required>
                <br><br>
                <label for="overload">Overload: </label>
                <input type="number" name = "overloadFORM" class = "overload" placeholder="Overload.." required>
            </div>
            <div class="inline">
                <span>Deductions</span>
                <br><br>
                <label for="sss">SSS: </label>
                <input type="number" name = "sssFORM" class = "sss" placeholder="SSS.." required>
                <br><br>
                <label for="pagibig">Pag-Ibig: </label>
                <input type="number" name = "pagibigFORM" class = "pagibig" placeholder="Pag-Ibig.." required>
                <br><br>
                <label for="philhealth">Philhealth: </label>
                <input type="number" name = "philhealthFORM" class = "philhealth" placeholder="Philhealth.." required>
            </div>
            <div>
                <input type="submit" name="save" class="submit" value="Save Employee">
                <input type="reset" name="reset" class="reset">
                <a href="YAP_main.php">Back</a>
                    <p class="successmessage">
                        <?php
                            //1/2 SMALL DESIGN FOR SUCCESS POPUP
                            if (isset($_SESSION['success'])){
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            }
                        ?>
                    </p>
            </div>
        </form>
    </div>
</body>
</html>