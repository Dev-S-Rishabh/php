<?php
	$x = 100;

	function show()
	{
		$y =200;

		echo "<br/>Calling from show X : ".$GLOBALS["x"];
		echo "<br/>Y : $y";
	}

	echo "<br/>X : $x";
	

	show();
?>