<?php

	$count = 1;
	$k = 5;
	
	for($i = 1; $i <= 5; $i++) 
	{	
		for($j = 1; $j <= $i; $j++) 
		{
			echo $count % 2;
			echo " ";
			$count = $count + 1;
		}
 
		if ($i % 2 == 0)
		{	
			$count = 1;
		}
		else
		{	
			$count = 0;
		}
		
		echo "<br/>";
			
	}
	
?>