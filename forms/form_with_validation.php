<?php
  require_once("../building_webpages/included_functions.php");
  require_once("validations_functions.php");

  $errors = array();
  $message = "";

  if (isset($_POST['submit'])) {
    // form was submitted
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validations
    $fields_required = array("username", "password");
    foreach($fields_required as $field) {
      $value = trim($_POST[$field]);
      if (!validates_presence($value)) {
        $errors[$field] = ucfirst($field) . " cannot be blank";
      }
    }

    $fields_with_max_lengths = array("username" => 30, "password" => 8);
    foreach($fields_with_max_lengths as $field => $max) {
      $value = trim($_POST[$field]);
      if (!validates_max_length($value, $max)) {
        $errors[$field] = ucfirst($field) . " is too long";
      }
    }

    if (empty($errors)) {
      // Log in section of code
      if ($username == "alex" && $password == "password123") {
        // logged in successfully
        redirect_to("../basic.html");
      } else {
        $message = "Username/Password do not match";
      }
    }
  } else {
    $username = "";
    $message = "Please log in.";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>

    <?php echo $message; ?>
    <?php echo form_errors($errors); ?>

    <form action="form_with_validation.php" method="post">
      Username: <input type="text" name="username" value=<?php echo htmlspecialchars($username); ?> /><br />
      Password: <input type="password" name="password" value="" /><br />
      <br />
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
