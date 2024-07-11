<?php
// Place PHP code at the very beginning, before any HTML or whitespace

if (isset($_GET['search'])) {
  $url = $_GET['search'];
  header("Location: $url");
  exit(); // It's a good practice to include exit() after header() to stop further execution
} else {
  echo "No search parameter provided.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form name="he" method="get">
    <input type="text" name="search" />
    <input type="submit">
  </form>
</body>

</html>