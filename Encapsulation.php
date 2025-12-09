<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
</head>
<body>
    <?php
        class Employee{
            private $salary = 0;

            public function setSalary($salary){
                $this->salary = $salary;
            }

            public function getSalary(){
                return $this->salary;
            }
        }

        $employee = new Employee();

        $employee->setSalary(20000);
        echo "Salary: " . $employee->getSalary();
    ?>
    
</body>
</html>