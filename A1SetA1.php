<?php
	include("A1SetA1_1.php");

	$str = $_GET["str"];
	$op = $_GET["op"];

	switch($op)
	{
		case "1" : occ($str);
			break;
		case "2" : palindrome($str);
			break;
		default  : echo "Invalid Choice";
	}
?>

