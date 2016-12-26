<?php

class Matrix extends BaseController 
{
	private $n;
	private $matrix;

	public function init($n)
	{
		$this->n = $n;

		for ($i=0; $i < $this->n; $i++) { 
			
			for ($j=0; $j < $this->n ; $j++) { 
				
				for ($k=0; $k <$this->n ; $k++) { 

					$this->matrix[$i][$j][$k] = 0;
				}
			}
		}
	}

	public function update($i, $j, $k, $value)
	{
		$this->matrix[$i - 1][$j - 1][$k - 1] = (int) $value;
		return 'OK';
	}

	public function sum($x2, $y2, $z2, $x1, $y1, $z1)
	{
		
		$sum = 0;

		for ($i = $x2 - 1; $i >= $x1 - 1 ; $i --) { 
			
			for ($j = $y2 - 1; $j >= $y1 - 1 ; $j --) { 
				
				for ($k = $z2 - 1; $k >= $z1 - 1 ; $k --) { 

					$sum += $this->matrix[$i][$j][$k];
				}
			}
		}

		return $sum;
	}

}