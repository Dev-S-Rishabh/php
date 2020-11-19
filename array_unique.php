<?php
	$arr = array(10,20,10,30,40,10,50,50);

	echo "<br><br> Before : ";
	print_r($arr);

	echo "<br><br> After : ";

	$arr = array_unique($arr);

	print_r($arr);
?>