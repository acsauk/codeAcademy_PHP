<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Pointers</title>
  </head>
  <body>

  <?php
  $array = array("first","second","third","fourth","fifth","sixth","seventh","eight");

  foreach($array as $position) {
    echo "Position in array: {$position} ";
  }
  ?>

  <br />

  <?php
  reset($array);
  echo "1: " . current($array) . "<br />";

  next($array);
  echo "2: " . current($array) . "<br />";

  next($array);
  next($array);
  echo "3: " . current($array) . "<br />";

  prev($array);
  echo "4: " . current($array) . "<br />";

  reset($array);
  echo "5: " . current($array) . "<br />";

  end($array);
  echo "6: " . current($array) . "<br />";

  next($array);
  echo "7: " . current($array) . "<br />";

  ?>

  <br />

  <?php
    // $array = array("first","second","third","fourth","fifth","sixth","seventh","eight");

    reset($array);

    while($position = current($array)) {
      echo $position . ", ";
      next($array);
    }

  ?>

  </body>
</html>
