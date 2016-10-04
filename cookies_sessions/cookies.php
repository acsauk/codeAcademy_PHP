<?php

  // Cookie setting must be done before any HTML is output unless
  // output buffering is turned on!

  $name = "test";
  $value = "Hello";
  $expire = time() + (60*60*24*7); // add seconds to expiry date
  setcookie($name, $value, $expire);

  // setcookie($name); // Works but not clear that you are trying to unset cookie
  // setcookie($name, null, $expire); // Clearer as using null
  // setcookie($name, $value, time() - 3600); // Also clear as using previous time
  // setcookie($name, null, time() - 3600); // Most clear as using previous time & null

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>

    <?php
    // if (isset($_COOKIE["test"])) {
    //   $test = $_COOKIE["test"];
    // } else {
    //   $test = "";
    // }
    // Above code shown in ternary version below:

    $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
    echo $test;
    ?>

  </body>
</html>
