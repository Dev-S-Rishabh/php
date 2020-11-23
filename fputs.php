<html>
<head>
<title>File Demo</title>
</head>
<body>
<form method="get" action="file6.php">
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
	$ft = fopen("xyz.txt","w") or die("Unable to open file");

	while(!feof($fp))
	{
		$data = fgets($fp);
		fputs($ft, $data);
	}

	fclose($fp);
	fclose($ft);

	echo "File copied successfully";
     }
?>
