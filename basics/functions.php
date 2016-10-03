<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions: Defining</title>
  </head>
  <body>

  <?php

  function say_hello() {
    echo "Hello world! <br />";
  }

  say_hello();

  function say_hello_to($word) {
    echo "Hello {$word}! <br />";
  }

  say_hello_to("World");
  ?>

  </body>
</html>
