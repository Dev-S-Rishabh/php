<html>
<head>
<title>File Demo</title>
</head>
<body>
<form method="get" action="file3.php">
Enter File Name <input type="text" name="fnm"><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


<?php
      if(isset($_GET['submit']))
      {
	$fnm = $_GET['fnm'];

	$fp = fopen($fnm,"r") or die("Unable to open file");

	while(!feof($fp))
	{
		$data = fgetc($fp);
		echo "<br>".$data;
	}

	fclose($fp);
     }
?>