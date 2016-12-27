<!DOCTYPE html>
<html>
<head>
	<title>Cube Summation Test</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</head>
<body>
	<div class="container">
		<div class="row">
			<br />
			<div class="jumbotron">
				<h1>Cube Summation App</h1>
				<p> Application made to solve HackerRank's problem Cube Summation: <a href="https://www.hackerrank.com/challenges/cube-summation">https://www.hackerrank.com/challenges/cube-summation</a></p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h2>Input section</h2>
					<?php
						echo Form::open(array('action' => 'HandlerController@handle', 'form-group' ));
						
						echo Form::textarea('input', '', array('class'=> 'form-control', 'placeholder' => 'Introduce input...'));
						echo "<br/>";
						echo Form::submit('Evaluate', array('class'=>'btn btn-success btn-lg'));

						Form::close(); 
					?>
				</div>

				<div class="col-md-6">
					<h2> Sample input</h2>
					<pre>
2
4 5
UPDATE 2 2 2 4
QUERY 1 1 1 3 3 3
UPDATE 1 1 1 23
QUERY 2 2 2 4 4 4
QUERY 1 1 1 3 3 3
2 4
UPDATE 2 2 2 1
QUERY 1 1 1 1 1 1
QUERY 1 1 1 2 2 2
QUERY 2 2 2 2 2 2							
					</pre>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-6">
					<h1> Result section </h1>
					@yield('result')
				</div>
			</div>

		</div>
	</div>


</body>
</html>