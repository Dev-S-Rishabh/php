<?php
	function check($a)
	{
		if($a>0)
		{
			return $a;
		}
	}

	$arr = array(10,20,30,-40,50,-60,70);

	print_r(array_filter($arr,"check"));		

?>