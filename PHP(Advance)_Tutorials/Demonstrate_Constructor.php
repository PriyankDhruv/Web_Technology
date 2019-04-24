<?php

	class Avengers 
	{
		function __construct() 
		{
			print "But, One thing we can't Change that we are Avengers."."<br/>"."<br/>";
		}
	}

	class Age_Of_Ultron extends Avengers 
	{
		function __construct() 
		{
			print "Ultron's Revenge againts Avengers."."<br/>";
			parent::__construct();
		}
	}

	class Infinity_War extends Avengers 
	{
		function __construct() 
		{
			print "Thanos' Conquering of different Miles-Stones."."<br/>";
			parent::__construct();
		}
	}
	
	class Endgame extends Avengers
	{
		function __construct() 
		{
			print "Avengers' Revenge of fallen against Thanos."."<br/>";
			parent::__construct();
		}
	}

	$obj = new Age_Of_Ultron();

	$obj = new Infinity_War();
	
	$obj = new Endgame();
	
?>