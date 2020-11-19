<?php
	require("A1SetB1_1.php");

	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$op = $_GET['op'];

	$ans = 0;

	switch($op)
	{
		case "Add" : $ans = add($n1,$n2);
				break;
		case "Sub" : $ans = sub($n1,$n2);
				break;
		case "Mul" : $ans = mul($n1,$n2);
				break;
		case "Div" : $ans = div($n1,$n2);
				break;
		default : echo "Invalid Choice";
	}

	echo "<br>Ans is : ",$ans;
 
?>

