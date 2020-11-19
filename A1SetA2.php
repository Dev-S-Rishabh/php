<!-- A1 Set A2
Write a PHP script for the following: 
Design a form to accept two strings from the user. 
Find the first occurrence and the last occurrence of the small string in the large string. 
Also count the total number of occurrences of small string in the large string. 
Provide a text box to accept a string, which will replace the small string in the large string. 
(Use built-in functions) -->

<html>
<head>
<title>A1 Set A2</title>
</head>

<body>
<form method="get" action="A1SetA2.php">
Enter First String <input type="text" name="str1"><br/>
Enter Second String <input type="text" name="str2"><br/>
Enter Third String <input type="text" name="str3"><br/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
	if(isset($_GET['submit']))
	{
		$str1 = $_GET['str1'];
		$str2 = $_GET['str2'];
		$str3 = $_GET['str3'];

		if(strlen($str1) > strlen($str2))
		{
			$s1 = $str1;
			$s2 = $str2;
		}
		else
		{
			$s1 = $str2;
			$s2 = $str1;
		}

		echo "<br/> First Occurrence : ".strpos($s1,$s2);
		echo "<br/> Last Occurrence : ".strrpos($s1,$s2);
		echo "<br/> Total Occurrences : ".substr_count($s1,$s2);

		$rep = str_replace($s2,$str3,$s1);	
		echo "<br/> After Replace : ".$rep;	
	}
?>