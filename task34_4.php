<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $projectName = $_SERVER['PHP_SELF'];
  $scriptName = $_SERVER['SCRIPT_NAME'];
  echo "Project name is $projectName <br>";
  echo "Script name is $scriptName <br>";
  ?>
</body>