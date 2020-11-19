<?php
	if(isset($_GET['submit']))
	{
		$op = $_GET['op'];

		$arr = array("PHP"=>3500,"Java"=>5000,"VB"=>3000,"C++"=>2500,"C"=>2000);

		switch($op)
		{
			case 1:	// print_r($arr);
				// var_dump($arr);
				
				foreach($arr as $k=>$v)
				{
					echo "<br/> $k = $v";
				}

				break;

			case 2:	// echo "<br/> Total no. of elements are : ".count($arr);
				echo "<br/> Size is : ".sizeof($arr);
				break;

			case 3:	unset($arr['VB']);
				print_r($arr);
				break;

			case 4:	print_r(array_flip($arr));
				break;

			case 5:	shuffle($arr);
				print_r($arr);
				break;

			default :	echo "Invalid Choice";
		}
	}	
?>