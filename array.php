<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn Php</title>
</head>

<body>
    <?php
    $cars = array("volvo", "gtr");
    // var_dump($cars);

    for ($i = 0; $i < 2; $i++) {
        echo "<BR>";
        echo  $cars[$i];
    }
    ?>
</body>

</html>