<?php
	$fp = fopen("abc.txt","a") or die("Unable to open file");

	fwrite($fp,"Welcome to K2");
	fputs($fp,"How are you?");

	fclose($fp);

	echo "File created successfully";
?>
