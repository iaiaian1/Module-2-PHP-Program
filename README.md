# Module-2-PHP-Program
PHP

Github changed file formatting from CLRF to LF, may cause issues. When encountered just find the "\r\n" or any similar code I implemented to fix a bug caused by CLRF in file named validate.php and payslip_emp.php and change it accordingly.

CRLF bug caused php to not be able to read next line properly, fixed by str_replace("\r\n",""(literally nothing),"the said line causing bug").
