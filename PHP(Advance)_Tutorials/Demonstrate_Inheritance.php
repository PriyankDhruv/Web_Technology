<?php

	class Tony
	{	
		PUBLIC function MyStmt($String)
		{
			echo "Tony : ".$String.PHP_EOL;
		
		}
		
		PUBLIC function printStmt()
		{
			echo "I am Ironman..!!"."<br/>"."<br/>".PHP_EOL;

		}
		
	}
	
	class Ironman extends Tony
	{
		PUBLIC function MyStmt($String)
		{
			echo "Ironman : ".$String.PHP_EOL;
		
		}
	
	}
	
	$Tony = new Tony();
	$Ironman = new Ironman();
	
	$Tony -> MyStmt("The truth is.."."<br/>"."<br/>");
	$Tony -> printStmt();
	
	$Ironman -> MyStmt("The truth is.."."<br/>"."<br/>");
	$Ironman -> printStmt();
	
?>	

	
