<!-- A2 Set C1

Write a menu driven program to perform the following stack and queue related 
operations:[Hint: use Array_push(), Array_pop(), Array_shift(), Array_unshift()]
a) Insert an element in stack
b) Delete an element from stack
c) Display the contents of stack
d) Insert an element in queue
e) Delete an element from queue
f) Display the contents of queue   
-->

<html>
<head>
<title>A2 Set C1 </title>
</head>

<body>
<form method="get" action="A2SetC1.php">
Enter element <input type="text" name="ele"><br/>
<input type="radio" name="choice" value="1">Insert an element in stack <br/>
<input type="radio" name="choice" value="2">Delete an element from stack <br/>
<input type="radio" name="choice" value="3">Display the contents of stack <br/>
<input type="radio" name="choice" value="4">Insert an element in queue <br/>
<input type="radio" name="choice" value="5">Delete an element from queue <br/>
<input type="radio" name="choice" value="6">Display the contents of queue <br/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


<?php
	if(isset($_GET['submit']))
	{
		$arr = array(10,20,30,40,50);

		switch($_GET['choice'])
		{
			case 1:	array_push($arr, $_GET['ele']);
				print_r($arr);
				break;
			case 2:	echo array_pop($arr);
				break;
			case 3:	print_r($arr);
				break;
			case 4:	array_push($arr, $_GET['ele']);
				print_r($arr);
				break;
			case 5:	echo array_shift($arr);
				break;
			case 6:	print_r($arr);
				break;
		}
	}
?>