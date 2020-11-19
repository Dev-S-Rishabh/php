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
	
	$a = serialize($t);

	echo "<br> After Serialization : ".$a;

	$b = unserialize($a);

	echo "<br> After Unserialization : ";
	print_r($b);
?>