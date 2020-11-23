<html>
<head>
<title>File Handling</title>
</head>

<body>
<form method="get" action="dir2.php">
Enter Directory Name <input type="text" name="dnm"> <br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
     if(isset($_GET["submit"]))
     {
	$dir = $_GET["dnm"];

	if(is_dir($dir))
	{
		$count = 0;

		$d = opendir($dir);

		while(($f=readdir($d)) !== false)
		{
			echo "<br>".$f;
			$count++;
		}

		closedir($d);
		
		echo "<br> Total Files and directories are : ".$count;
	}
	else
	{
		echo "Invalid Directory";
	}
        }
?>
