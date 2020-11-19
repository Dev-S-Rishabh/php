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

	$a = clone $t;

	$a->setData(1,"abc",5000.75);
	$a->getData();
?>