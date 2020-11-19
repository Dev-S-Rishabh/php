<?php
	function add()
	{
		$sum = 0;

		for($i=0;$i<func_num_args();$i++)
		{
			echo "<br>".func_get_arg($i);

			$sum += func_get_arg($i);
		}

		echo "<br>------------";
		echo "<br>  $sum";
		print_r(func_get_args());
		echo "<br>------------";
	}

	add(10,20,30);	
	add(10,20,30,40,50);	
	add(10,20);	
	add(10,20,30,40);	
		
?>