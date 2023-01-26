<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Welcome to my website!</h1>
  <?php

  $hour = date('G'); //24 hr format
  $day = date('w'); //day of the week from 0-6

  // $hour =15;
  // $day = 0;

  echo "<p> the current hour is $hour and the current day is $day";

  if($day == 1)
  {
    echo "<h2>Do you have a case of the Mondays?</h2>";
  }
  elseif($day == 6 or $day == 0)
  {
    echo "<h2>It's the weekend!</h2>";
  }
  elseif($day == 5 and $hour > 12)
  {
    echo "<h2>It's almost the weekend!</h2>";
  }
  elseif($hour < 12)
  {
    echo "<h2>Have a good morning!</h2>";
  }
  else
  {
    echo "<h2>Have a good day!</h2>";
  }
 




  ?>
  
</body>
</html>