<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions: Return Values</title>
  </head>
  <body>

    <?php

      function add($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
      }

      $result1 = add(3,4);
      $result2 = add(3,$result1);
      echo $result2;
    ?>

    <br />

    <?php
    function chinese_zodiac($year) {
      switch (($year - 4) % 12) {
        case 0: return 'Rat';
        case 1: return 'Ox';
        case 2: return 'Tiger';
        case 3: return 'Rabbit';
        case 4: return 'Dragon';
        case 5: return 'Snake';
        case 6: return 'Horse';
        case 7: return 'Goat';
        case 8: return 'Monkey';
        case 9: return 'Rooster';
        case 10: return 'Dog';
        case 11: return 'Pig';
      }
    }

    $year = 2013;
    $zodiac = chinese_zodiac($year);
    echo "{$year} is the year of the {$zodiac} <br />";
    echo "{$year} is the year of the " . chinese_zodiac($year);


    ?>



  </body>
</html>
