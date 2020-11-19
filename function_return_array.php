<?php
	function inc($a)
	{
		return($a+100);
	}

	$arr = array(10,20,30,40,50);

	print_r($arr);

	echo "<br><br>";

	print_r(array_map("inc",$arr));
?>