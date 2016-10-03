<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>False Positives</title>
  </head>
  <body>
   <h2>Equal ==</h2>
   <?php

      function is_equal($value1, $value2) {
        $output = "{$value1} == {$value2}: ";
        if($value1 == $value2) {
          $output .= "true<br />";
        } else {
          $output .= "false<br />";
        }
        return $output;
      }


      echo is_equal(0, false);
      echo is_equal(4, true);
      echo is_equal(0, null);
      echo is_equal(0, "0");
      echo is_equal(0, "");
      echo is_equal(0, "a");
      echo is_equal("1", "01");
      echo is_equal("", null);
      echo is_equal(3, "3 dogs");
      echo is_equal(100, "1e2");
      echo is_equal(100, 100.00);
      echo is_equal("abc", true);
      echo is_equal("123", "    123");
      echo is_equal("123", "+0123");
   ?>
   <br />
      <h2>Exact ===</h2>
   <?php

      function is_exact($value1, $value2) {
        $output = "{$value1} === {$value2}: ";
        if($value1 === $value2) {
          $output .= "true<br />";
        } else {
          $output .= "false<br />";
        }
        return $output;
      }

      echo is_exact(0, false);
      echo is_exact(4, true);
      echo is_exact(0, null);
      echo is_exact(0, "0");
      echo is_exact(0, "");
      echo is_exact(0, "a");
      echo is_exact("1", "01");
      echo is_exact("", null);
      echo is_exact(3, "3 dogs");
      echo is_exact(100, "1e2");
      echo is_exact(100, 100.00);
      echo is_exact("abc", true);
      echo is_exact("123", "    123");
      echo is_exact("123", "+0123");
   ?>

   <h2> PHP type juggling </h2>
   <h3> String vs. null: PHP converts null to ""</h3>
   <h3> Boolean vs. other: PHP converts other to boolean</h3>
   <h3> Number vs. other: PHP converts other to number</h3>



  </body>
</html>
