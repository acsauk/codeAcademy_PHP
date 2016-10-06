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
  // 2. Query the database
  $query  = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";

  $result = mysqli_query($connection, $query);
  // Test if there was a query error (different to no result found!)
  if (!$result) {
    die("Database query failed.");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MySQL and PHP</title>
  </head>
  <body>

    <ul>
    <?php
     // 3. use returned data (if any)
     while($subject = mysqli_fetch_assoc($result)) {
       // output data from each row
    ?>
      <li><?php echo $subject["menu_name"] . " (" .
                $subject["id"] . ")"; ?></li>
    <?php
     }
    ?>
    </ul>

    <?php
      // 4. Release returned data
      mysqli_free_result($result);
    ?>
  </body>
</html>

<?php
  // 5. Close connection to database
  mysqli_close($connection);
?>
