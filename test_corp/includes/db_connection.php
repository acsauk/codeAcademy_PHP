<?php
  // 1. Create a database connection (usually you don't use variables,
  // for illustrative purposes only)

  define("DB_SERVER", "localhost");
  define("DB_USER", "user_cms");
  define("DB_PASS", "password123");
  define("DB_NAME", "test_corp");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  // Test if the connection occured
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
