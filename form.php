<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn Php</title>
</head>

<body>
    <form action="form.php" method="$_GET">
        <label style="font-size: 40px;" for="namee">Enter Your Name</label>
        <input type="text" name="name" id="name">
        <label style="font-size: 40px;" for="passwordd">Enter Your Password</label>
        <input type="password" name="password">
        <button type="submit">Evide Thodaruth Pls</button>
    </form>

    <?php
    $name = $_GET["name"];
    $password = $_GET["password"];
    echo "your name is $name";
    echo "<br> your pass is $password";

    if (!$name == "shastri") {
        echo "Invalid Details Make Sure You Selt Correctly";
    } else {
        if ($password == 1234) {
            echo "success";
        } else
            echo "<br> Invalid Details Make Sure You Spelt Correctly";
    }
    ?>

</body>

</html>