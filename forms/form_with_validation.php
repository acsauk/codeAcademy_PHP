<?php
  require_once("../building_webpages/included_functions.php");

  if (isset($_POST['submit'])) {
    // form was submitted
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "alex" && $password == "password123") {
      // logged in successfully
      redirect_to("../basic.html");
    } else {
      $message = "There were some errors.";
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

    <?php
      echo $message;
    ?>

    <form action="form_single.php" method="post">
      Username: <input type="text" name="username" value=<?php echo htmlspecialchars($username); ?> /><br />
      Password: <input type="password" name="password" value="" /><br />
      <br />
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
