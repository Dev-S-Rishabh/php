<?php

	$arr = array("PHP"=>3500,"Java"=>5000,"C"=>2000,"VB"=>3000,"C++"=>2500);

	print_r($arr);
	
	echo "<br><br>";

	asort($arr);
	print_r($arr);

	echo "<br><br>";

	ksort($arr);
	print_r($arr);

	echo "<br><br>";

	arsort($arr);
	print_r($arr);

	echo "<br><br>";

	krsort($arr);
	print_r($arr);
?>