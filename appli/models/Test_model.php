<?php

/**
* 
*/
class Test_model
{
	
	function __construct()
	{
		echo "model de test construit </br>";    
		$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	  $test2 = json_decode($json);
		echo $test2->a;
	}
}
