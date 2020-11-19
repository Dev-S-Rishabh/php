<?php

	//$arr = array("PHP","Java","C",array(1,2,3),"VB","C++");

	$arr = array(array(1,2,3),array(4,5,6),array(7,8,9));

	// print_r($arr);

	// var_dump($arr);

	for($i=0;$i<count($arr);$i++)
	{
		for($j=0;$j<3;$j++)
		{
			echo " ".$arr[$i][$j];
		}
		echo "<br>";
	}
?>