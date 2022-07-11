<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Student
    {
        public $name, $salary;

        public  function showDetails()
        {
            echo "Name =" . $this->name;
            echo "<br>";
            echo "Salary =" . $this->salary;
        }
    };

    $s1 = new Student;
    $s1->name = "Myren";
    $s1->salary = 50000;

    $s1->showDetails();
    ?>
</body>

</html>