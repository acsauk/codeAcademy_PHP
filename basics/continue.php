<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Continue</title>
  </head>
  <body>
  <?php

   for ($count=0; $count <= 10; $count++) {
     if ($count % 2 == 0) {
       continue;
     }
     echo $count . ", ";
   }

   ?>

   <br />

   <?php

     $count = 0;
     while ($count <= 10) {
       if ($count == 5) {
         $count++;
         continue;
       }
       echo $count . ", ";
       $count++;
     }

   ?>

   <?php

    for ($i=0; $i<=5; $i++) {
      if ($i % 2 == 0) { continue(1); }
      for ($k=0; $k<=5; $k++) {
        if ($k == 3) { continue(2); } // The two tells the loop to go back two loops up
        echo $i . "-" . $k . "<br />";
      }
    }

   ?>
  </body>
</html>
