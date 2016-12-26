<?php

use Response;

class HandlerController extends BaseController{
	
	private $matrix;

	public function init($n)
	{
		$this->matrix = new Matrix;
		$this->matrix->init($n);
	}

	public function handle()
	{
		$response = '';

		$input = Input::get('input');
		
		$separator = "\r\n";
		
		$t = strtok($input, $separator);
		
		for ($times = 0; $times < (int) $t ; $times++) {

			$indexes = strtok($separator);

			$n = (int) array_get($indexes, 0);
			$m = (int) array_get($indexes, 2);

			$this->init($n);

			for ($operations = 0; $operations < $m ; $operations++) { 

				$line = strtok($separator);

				$this->processCommandLine($line);
			}

		}

	}

	public function executeCommand($command, $params)
	{
		$response = '';
		
		if($command == "UPDATE")
		{
			$response = $this->update($params);
		}
		else 
		{
			$response = $this->sum($params);
			echo $response;
			echo "<br/>";
		}

		return $response; 
	}

	public function update($params)
	{
		$j = $params['i'];
		$i = $params['j'];
		$k = $params['k'];
		$value = $params['value'];

		return $this->matrix->update($i, $j, $k, $value);
	}

	public function sum($params)
	{
		$x2 = $params['x2'];
		$y2 = $params['y2'];
		$z2 = $params['z2'];
		
		$x1 = $params['x1'];
		$y1 = $params['y1'];
		$z1 = $params['z1'];

		return $this->matrix->sum($x2, $y2, $z2, $x1, $y1, $z1);
	}


	// Private functions

	private function processCommandLine($line)
	{
		$params = array();

		$tokens = explode(" ", $line);

		$command = array_get($tokens, 0);

		$params = $this->setParams($command, $params, array_slice($tokens, 1));

		$response = $this->executeCommand($command, $params);
	}

	private function setParams($command, $params, $payload)
	{
		if($command == 'UPDATE')
		{
			$params = array(
				'i' 	=> (int) array_get($payload, 0),
				'j' 	=> (int) array_get($payload, 1),
				'k' 	=> (int) array_get($payload, 2),
				'value' => (int) array_get($payload, 3)
			);

		}
		else
		{
			$params = array(
				'x1' => (int) array_get($payload, 0),
				'y1' => (int) array_get($payload, 1),
				'z1' => (int) array_get($payload, 2),
				'x2' => (int) array_get($payload, 3),
				'y2' => (int) array_get($payload, 4),
				'z2' => (int) array_get($payload, 5),
			);
		}

		return $params;
	}

}