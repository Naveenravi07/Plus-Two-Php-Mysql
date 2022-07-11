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

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php studyy";

    $connection = mysqli_connect($host, $user, $pass, $dbname);
    if ($connection) {
        echo ("COnnected");
        $sql = "INSERT INTO contact (name,email,phone) VALUES ('Shastri', 'shast@gmail.com','100' )";
       $result= mysqli_query($connection, $sql);
       if($result){
        echo "<br> Data Added To Db;";
       }else{
        echo "<br> Data Adding Failed";
       }
    } else {
        echo ("Connection Failed");
    }
    mysqli_close($connection);
    ?>
</body>

</html>