<?php

class MatrixController extends BaseController 
{
	private $matrix[][][];
	private $N;
	private $M;

	public function init()
	{
		for ($i=0; $i < $N; $i++) { 
			for ($j=0; $j < $N ; $j++) { 
				for ($k=0; $k < $N ; $k++) { 
					$matrix[$i][$j][$k] = 0;
				}
			}
		}	
	}

	public function update($i, $j, $k, $value)
	{
		$this->matrix[$i][$j][$k] = $value;
	}

	public function getSum()
	{

	}

}