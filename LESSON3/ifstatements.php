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

  $hour = date('G');

  if( $hour < 12 )
    {
      $greeting = "Good morning!";
    }
  else 
    {
      $greeting = "Good afternoon!";
    }

  ?>
  
</body>
</html>