<!-- A2 Set C2

Write a menu driven program to perform the following operations on associative arrays:
a) Sort the array by values (changing the keys) in ascending, descending order. 
b) Also sort the array by values without changing the keys.
c) Filter the odd elements from an array.
d) Sort the different arrays at a glance using single function.
e) Merge the given arrays.
f) Find the intersection of two arrays.
g) Find the union of two arrays.
h) Find set difference of two arrays. 
-->

<html>
<head>
<title>A2 Set C2 </title>
</head>

<body>
<form method="get" action="A2SetC2.php">
<input type="radio" name="choice" value="1">Sort the array by values (changing the keys) in ascending, descending order.<br/>
<input type="radio" name="choice" value="2">Also sort the array by values without changing the keys. <br/>
<input type="radio" name="choice" value="3">Filter the odd elements from an array. <br/>
<input type="radio" name="choice" value="4">Sort the different arrays at a glance using single function. <br/>
<input type="radio" name="choice" value="5">Merge the given arrays. <br/>
<input type="radio" name="choice" value="6">Find the intersection of two arrays. <br/>
<input type="radio" name="choice" value="7">Find the union of two arrays. <br/>
<input type="radio" name="choice" value="8">Find set difference of two arrays. <br/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


<?php
	function odd($n)
	{
		if($n%2 != 0)
		{
			return $n;
		}
	}

	if(isset($_GET['submit']))
	{
		$arr = array("PHP"=>3500, "JAVA"=>5000, "C++"=>2500,"VB"=>3000,"C"=>2000);

		$arr1 = array(11,55,11,40,44,11);
		$arr2 = array(33,22,55,44,10,20);

		print_r($arr1);
		echo "<br><br>";
		print_r($arr2);
		echo "<br><br>";
		
		switch($_GET['choice'])
		{
			case 1:	asort($arr);
				print_r($arr);
				break;
			case 2:	ksort($arr);
				print_r($arr);
				break;
			case 3:	print_r(array_filter($arr2,"odd"));
				break;
			case 4:	print_r($arr1);
				echo "<br>";
				print_r($arr2);
				echo "<br><br>";
				array_multisort($arr1,SORT_DESC, $arr2,SORT_DESC);
				print_r($arr1);
				echo "<br>";
				print_r($arr2);
				break;
			case 5:	print_r(array_merge($arr1,$arr2));
				break;
			case 6:	print_r(array_unique(array_intersect($arr1,$arr2)));
				break;
			case 7:	$a = array_merge($arr1,$arr2);
				$b = array_unique($a);
				print_r($b);
				break;
			case 8:	print_r(array_diff($arr1,$arr2));
				break;
		}
	}
?>