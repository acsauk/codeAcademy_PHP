<?php
  // Redirect to a new page
  function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
  }

  $logged_in = $_GET['logged_in'];
  if ($logged_in == "1") {
    redirect_to("first_page.php");
  } else {
    redirect_to("second_page.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Redirections</title>
  </head>
  <body>

    <?php

    ?>

  </body>
</html>
