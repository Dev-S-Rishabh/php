<html>
<head>
<title>File Demo</title>
</head>
<body>
<form method="get" action="file1.php">
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

	$data = fread($fp,filesize($fnm));

	fclose($fp);

	echo $data;
     }
?>