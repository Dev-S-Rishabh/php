<?php
	class Test
	{
		private $x;
		protected $y;
		public $z;

		public function setData($x,$y,$z)
		{
			$this->x = $x;
			$this->y = $y;
			$this->z = $z;
		}

		public function getData()
		{
			echo "<br> X = ".$this->x;
			echo "<br> Y = ".$this->y;
			echo "<br> Z = ".$this->z;
		}
	}

	$t = new Test();
	
	$p = 100;

	echo "<br> get class : ".get_class($t);

	echo "<br> is object : ".is_object($t);

	if(is_object($t))
	{
		echo "<br> Is an Object";
	}
	else
	{
		echo "<br> Is not an Object";
	}

	echo "<br> get class vars : ";
	print_r(get_class_vars("Test"));

	echo "<br> get class methods : ";
	print_r(get_class_methods("Test"));
?>