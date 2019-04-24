<?php

	echo "<table border='1'>";

	for($a=1;$a<=10;$a++)
	{
		echo "<tr>";
		echo "<td>"."Cube of ".$a." is : </td>";
		echo "<td>".($a*$a*$a)."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
?>