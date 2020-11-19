<?php
	$arr = array("PHP"=>3500,"Java"=>5000,"C++"=>2500,"VB"=>3000,"C"=>2000);

	print_r($arr);

	echo "<br/><br/>";

	unset($arr["VB"]);

	print_r($arr);
?>