<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML encoding</title>
  </head>
  <body>

    <?php
      $linktext = "<Click> & learn more";
    ?>

    <a href="">
      <?php echo htmlspecialchars($linktext); ?>
    </a>

    <br />

    <?php
      $text = "©®É£";
      echo htmlentities($text);
    ?>

    <br />

    <?php

      $url_page = "php/created/page/url.php";
      $param1 = "This is a string with < >";
      $param2 = "&#?*[]+ are bad characters";
      $link_text = "<Click> & learn more";

      $url = "http://localhost/";
      $url .= rawurlencode($url_page);
      $url .= "?" . "param1=" . urlencode($param1);
      $url .= "?" . "param2=" . urlencode($param2);
    ?>

    <a href="<?php echo htmlspecialchars($url); ?>">
      <?php echo htmlspecialchars($linktext); ?>
    </a>

  </body>
</html>
