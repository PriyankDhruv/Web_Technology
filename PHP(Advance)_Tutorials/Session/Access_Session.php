<?php
	
	session_start();
	
?>

<html>
	<body>

<?php

	echo "<table border = '1'>";
	
		echo "<tr>";
			echo "<td><b>Emp_id</b></td>";
			echo "<td><b>Emp_Name</b></td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td><center>1</center></td>";
			echo "<td>".$_SESSION["Employee_1"]."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td><center>2</center></td>";
			echo "<td>".$_SESSION["Employee_2"]."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td><center>3</center></td>";
			echo "<td>".$_SESSION["Employee_3"]."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td><center>4</center></td>";
			echo "<td>".$_SESSION["Employee_4"]."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td><center>5</center></td>";
			echo "<td>".$_SESSION["Employee_5"]."</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td><center>6</center></td>";
			echo "<td>".$_SESSION["Employee_6"]."</td>";
		echo "</tr>";
		
	echo "</table>";

?>

	</body>
</html>