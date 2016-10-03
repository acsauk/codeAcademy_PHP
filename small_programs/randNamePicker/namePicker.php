<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $ary = array();
    array_push($ary, "Me");
    array_push($ary, "Brett");
    array_push($ary, "Gem");
    array_push($ary, "Mom");
    array_push($ary, "Dad");
    array_push($ary, "Nathan");
    array_push($ary, "Thierry");
    array_push($ary, "Meme");
	// Sort the list

    sort($ary);

	// Randomly select a winner!

    $winner = $ary[rand(0, count($ary) - 1)];

	// Print the winner's name in ALL CAPS
	print "The winner is..... " . strtoupper($winner) . "!!";
	?>
	</p>
</html>
