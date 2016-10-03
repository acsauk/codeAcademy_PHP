<?php
  header("HTTP 1.1/ 404 Not Found");
  header("X-Powered-By: none of your business");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Headers</title>
  </head>
  <body>

    <?php
      // This won't work as page has already recieved info
      // header("HTTP 1.1/ 404 Not Found");
    ?>

    <pre>
      <?php
        print_r(headers_list());
      ?>
    </pre>

  </body>
</html>
