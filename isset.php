<?php
	$arr = array("PHP"=>3500,"Java"=>5000,"C++"=>2500,"VB"=>3000,"C"=>2000);

	echo isset($arr["VB"]);

	if(isset($arr["VB"]))
	{
		echo "<br>Found";
	}
	else
	{
		echo "<br>Not Found";
	}

?>