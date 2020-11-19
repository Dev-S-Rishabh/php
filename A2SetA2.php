<!-- A2 Set A2

Accept a string from the user and check whether it is a palindrome or not 
(Implement stack operations using array built-in functions). -->


<html>
<head>
<title>A2 Set A2</title>
</head>

<body>
<form method="get" action="A2SetA2.php">
Enter String <input type="text" name="str"><br/>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
	if(isset($_GET['submit']))
	{
		$str = $_GET['str'];

		$rev = array();

		for($i=0;$i<strlen($str);$i++)
		{
			array_push($rev,$str[$i]);
		}

		for($i=0;$i<strlen($str);$i++)
		{
			$ch = array_pop($rev);

			if($str[$i] != $ch)
			{
				echo "String is not Palindrome";
				exit(0);
			}
		}

		echo "String is Palindrome";
	}
?>