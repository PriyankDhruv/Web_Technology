<?php
	
	$x = 1;
	$ascii = 97;
	
	for($i = 1; $i <= 5; $i++)
	{		
		for($j = 1; $j <= $i; $j++)
		{
			if($i % 2 == 1)
			{
				echo $x;	
				$x++;
				echo " ";
			}
			else
			{
				echo chr($ascii);
				$ascii++;
				echo " ";
			}
			
		}

		echo "<br/>";
	}
	
?>