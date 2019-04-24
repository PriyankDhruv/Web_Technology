<?php

	$a=0;
	$b=0;
	$c=1;

	echo "First 10 fibonacci numbers are as follows : <br>";
	
	for($i=0;$i<10;$i++)
	{
		echo $a."&nbsp;&nbsp;";
		$a=$b;
		$b=$c;
		$c=$a+$b;
	}
	
?>