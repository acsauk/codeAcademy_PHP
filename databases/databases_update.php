<?php
  // 1. Create a database connection (usually you don;t use variables,
  // for illustrative purposes only)
  $dbhost = "localhost";
  $dbuser = "user_cms";
  $dbpass = "password123";
  $dbname = "test_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if the connection occured
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php
  // Often these are form values in $_POST
  $id = 5;
  $menu_name = "Delete me";
  $position = 4;
  $visible = 1;

  // 2. Query the database

  $query  = "UPDATE subjects SET ";
  $query .= "menu_name = '{$menu_name}', ";
  $query .= "position = {$position}, ";
  $query .= "visible = {$visible} ";
  $query .= "WHERE id = {$id}";

  $result = mysqli_query($connection, $query);

  // This checks that the update actually updated an exisiting record!
  if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
    // redirect to("somepage.php")
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject update failed"
    die("Database query failed. " . mysqli_error($connection));
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MySQL and PHP</title>
  </head>
  <body>


  </body>
</html>

<?php
  // 5. Close connection to database
  mysqli_close($connection);
?>
