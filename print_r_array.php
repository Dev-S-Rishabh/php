<?php

	$arr = array("PHP","Java","C","VB","C++");

	print_r($arr);
	
	echo "<br><br>Current : ".current($arr);
	echo "<br><br>Next : ".next($arr);
	echo "<br><br>End : ".end($arr);
	echo "<br><br>Prev : ".prev($arr);
	echo "<br><br>Reset : ".reset($arr);
?>