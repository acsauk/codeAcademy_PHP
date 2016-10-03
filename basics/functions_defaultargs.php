<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions: Default Argument Values</title>
  </head>
  <body>

   <?php

    function paint($colour) {
      return "The colour of the room is {$colour}.<br />";
    }

    echo paint("blue");

    function paintdefault($room="office", $colour="red") {
      return "The colour of the {$room} is {$colour}.<br />";
    }

    echo paintdefault();
    echo paintdefault("bedroom","yellow");
    echo paintdefault("bedroom",null);
    echo paintdefault("kitchen");
    echo paintdefault(null, "blue"); //doesn't work

    ?>

  </body>
</html>
