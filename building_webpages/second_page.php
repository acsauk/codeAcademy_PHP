<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Second Page</title>
  </head>
  <body>

  <pre>
  <?php
    // print_r($_GET); Shows the contents of super global $_GET
  ?>
  </pre>

  <?php
    $id = $_GET['id'];
    echo $id;
  ?>

  <br />

  <?php
    $company = $_GET['company'];
    echo $company;
  ?>

  YOU AREN'T LOGGED IN!

  </body>
</html>
