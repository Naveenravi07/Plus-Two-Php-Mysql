<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="e" method="$_GET" action="sqladv.php">
        <label for="name">Name</label>
        <input name="name" type="text">
        <label for="email">Email</label>
        <input name="email" type="email">
        <label for="phone">Phone</label>
        <input type="tel" name="phone">
        <button type="submit"> Submit </button>
    </form>
  
</body>

</html>
<script>
    e.preventDefault()
</script>