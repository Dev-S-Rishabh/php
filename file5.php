<?php
	if(unlink("abc.txt"))
	{
		echo "File deleted successfully";
	}
	else
	{
		echo "File does not deleted";
	}
?>