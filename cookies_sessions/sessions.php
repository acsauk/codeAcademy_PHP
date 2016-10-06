<?php
  // Sessions use cookies to access the value associated
  // with the array the session info is stored in. As with
  // cookies, session_start() must be before HTML output
  // unless output buffering is turned on

  session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
  </head>
  <body>

    <?php
      $_SESSION["first_name"] = "Alex";
      $name = $_SESSION["first_name"];
      echo $name;
    ?>

  </body>
</html>
