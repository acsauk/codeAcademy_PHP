<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
	  $coinFlip = 0;
	  $headsCount = 0;
	  while($headsCount < 3) {
	    $flip = rand(0,1);
	    $coinFlip++;
	    if($flip){
	      echo "<div class = \"coin\">H</div>";
	      $headsCount++;
	    }
	    else {
	      echo "<div class = \"coin\">T</div>";
	      $headsCount = 0;
	    }
	  }
	  echo "It took " . $coinFlip . " flips to get three heads in a row!";
    ?>
    </body>
</html>
