<?php

	$arr = array("PHP"=>3500,"Java"=>5000,"C"=>2000,"VB"=>3000,"C++"=>2500);

	print_r($arr);
	
	echo "<br>Is VB exists? : ".array_key_exists("VB",$arr);

	if(array_key_exists("VB",$arr))
	{
		echo "<br>Found";
	}
	else
	{
		echo "<br>Not Found";
	}
?>