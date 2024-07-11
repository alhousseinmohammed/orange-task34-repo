<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $time = $_SERVER["REQUEST_TIME"];
  $time = date("d/ m/ y", $time);
  echo "request time is $time";
  ?>
</body>

</html>