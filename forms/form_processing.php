<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Processing</title>
  </head>
  <body>

    <pre>
      <?php
        print_r($_POST);
      ?>
    </pre>
    <br />
    <?php
      // Good way to set default values - although better solution for checking for form submissions below:
      $username = isset($_POST['username']) ? $_POST["username"] : "";
      $password = isset($_POST['password']) ? $_POST["password"] : "";
    ?>

    <?php
      if (isset($_POST['submit'])) {
        echo "form was submitted";
      }


    ?>

    <?php
      echo "{$username}: {$password}";
    ?>



  </body>
</html>
