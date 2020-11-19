<?php
	function show()
	{
		$x = 100;
		static $y = 100;

		echo "<br/> X : $x and Y : $y";

		$x++;
		$y++;
	}

	show();
	show();
	show();
	show();
	show();
	show();
?>