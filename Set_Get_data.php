<?php
	class Test
	{
		var $no;

		function setData($x)
		{
			$this->no = $x;
		}

		function getData()
		{
			echo "No is : ".$this->no;
		}
	}

	$t = new Test();

	$t->setData(123);
	$t->getData();
?>