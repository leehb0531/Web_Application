<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comming Soon</title>
</head>
<body>
  <h1>Sorry</h1>
  <p><?php
    $wait = 3; // number of days to be done
    echo "<h2>This page will be prepared to come in $wait days</h2>";
  ?></p>
  <p><?php
    echo "<h2>Maybe this page will be prepared to come in ".$_GET['days']."</h2>";
  ?></p>
</body>
</html>