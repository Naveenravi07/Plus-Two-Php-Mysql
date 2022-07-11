<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'form2.php';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php studyy";

    $connection = mysqli_connect($host, $user, $pass, $dbname);

    if ($connection) {
        echo ("Connected");
        if (isset($_GET["name"]) && ($_GET["email"]) && ($_GET["phone"])) {

            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $string = "INSERT INTO contact (name,email,phone) VALUES ('$name','$email','$phone')";

            $state = mysqli_query($connection, $string);
            if ($state) {
                echo (" <BR> Data Inserted Into Db ");
            } else {
                echo ("Data Failed To Insert Into Db ");
            }
        }
    } else {
        echo ("COnnection Fail With DB");
    }
    ?>
</body>

</html>