<?php

	class Vision
	{
		function __construct() 
		{
			print "Avengers &nbsp;: United we Stand."."<br/>"."<br/>";
		}

		function __destruct() 
		{
			print "Civil-War : Divided we Fall.";
		}
	}

	$Obj = new Vision();

?>