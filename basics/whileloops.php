<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loops: while</title>
  </head>
  <body>

  <?php
    $count = 0;
    while ($count <=10) {
      if ($count == 5) {
        echo "FIVE, ";
      } else {
      echo $count . ", ";
      }
      $count++;
    }

    echo "<br />";
    echo "Count: {$count}";
    echo "<br />";

   $count2 = 0;

    while ($count2 <=10) {
      if ($count2 % 2 == 0) {
        echo "{$count2}(even), ";
      } else {
        echo "{$count2}(odd), ";
      }
      $count2++;
    }
  ?>

  </body>
</html>
