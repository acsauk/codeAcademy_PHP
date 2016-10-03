<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loops: foreach</title>
  </head>
  <body>
    <?php
      $ages = array(8,15,22,8,9,98,55,43);

      foreach($ages as $age) {
        echo "Age: {$age}<br />";
      }
      ?>

      <br />

      <?php
      $person = array(
                  "first_name" => "Alex",
                  "last_name" => "Saunders",
                  "age" => "30",
                  "country" => "UK",
                  "eye_colour" => "Blue",
                );

      foreach ($person as $key => $value) {
        $attr_nice = ucwords(str_replace("_", " ", $key));
        echo "{$attr_nice}: {$value}<br />";
      }
      ?>

      <br />

      <?php

        $prices = array("New Macbook Pro" => 1500,
                        "Makers Academy fees" => 2500,
                        "Learning how to code" => null
                  );
        foreach($prices as $item => $price) {
          echo "{$item}: ";
          if (is_int($price)){
            echo "£" . $price;
          } else {
            echo "priceless";
          }
          echo "<br />";
        }

      ?>

  </body>
</html>
