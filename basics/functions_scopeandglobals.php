<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions: Scope and Global Variables</title>
  </head>
  <body>

  <?php

    $bar = "outside"; //Global scope!

    function foo() {
      global $bar;
      if (isset($bar)) {
        echo "foo: " . $bar . "<br />";
      }
      $bar = "inside"; // local scope!
    }

    echo "1: " . $bar . "<br />";
    foo();
    echo "2: " . $bar . "<br />";

  ?>

  </body>
</html>
