<!-- A2 Set B2

Define an array. 
Find the elements from the array that matches the given value 
using appropriate search function.  -->

<html>
<head>
<title> A2 Set B2 </title>
</head>

<body>
<form method="post" action="A2SetB2.php">
Enter element to serach : <input type="text" name="ele"><br/>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$arr = array(1,2,3,4,5,6,7,8,9);

		print_r($arr);

		$ele = $_POST['ele'];

		if(in_array($ele,$arr))
		{
			echo "<br>Found";
		}
		else
		{
			echo "<br>Not Found";
		}
	}
?>
