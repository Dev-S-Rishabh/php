<?php
	$arr1 = array(10,20,30,40,50);
	$arr2 = array(11,22,33);

	// array_splice($arr1, 1, 3, $arr2);

	// array_splice($arr1, 1, 4, $arr2);

	// array_splice($arr1, 1, 2, $arr2);

	array_splice($arr1, 1, 1, $arr2);

	print_r($arr1);

?>