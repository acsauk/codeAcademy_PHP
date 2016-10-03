<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Validation Errors</title>
</head>
<body>
  <?php
    require_once("validations_functions.php");

    $errors = array();

    $username = trim("Alex");

    if (!validates_presence($username)) {
      $errors['username'] = "Username cannot be blank";
    }
  ?>

  <?php echo form_errors($errors); ?>
  <?php
    if(array_key_exists("name", $errors)) {
      echo "<span class=\"error-field\">&lt;&lt;</span>";
    };
  ?>
</body>
