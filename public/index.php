<?php

use App\Hello;

require '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  
  $hello = new Hello();
  echo $hello->talk();

  ?>
</body>
</html>