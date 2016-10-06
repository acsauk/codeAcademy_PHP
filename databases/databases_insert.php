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
  $menu_name = "Today's testing trivia";
  $position = 4;
  $visible = 1;

  // Used to guard against SQL injection where someone can pass in
  // incorrect or malicious commands. Escapes special characters.
  $menu_name = mysqli_real_escape_string($connection, $menu_name);

  // 2. Query the database
  // This works...

  // $query  = "INSERT INTO subjects (menu_name, position, visible)
  //            VALUES ('{$menu_name}', {$position}, {$visible})";

  // ...but this is easier to read by keeping columns and rows separate:

  $query  = "INSERT INTO subjects (";
  $query .= "  menu_name, position, visible";
  $query .= ") VALUES (";
  $query .= "  '{$menu_name}', {$position}, {$visible}";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect to("somepage.php")
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject creation failed"
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
