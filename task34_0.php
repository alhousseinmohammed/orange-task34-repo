<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    email: <input type="text" /> <br>
    password: <input type="password"><br>
    <input type="submit">
  </form>
</body>

</html>
<?php
$method = $_SERVER['REQUEST_METHOD'];
echo "The method is \"$method\"";
?>