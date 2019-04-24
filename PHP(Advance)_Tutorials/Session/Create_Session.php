<?php

	session_start();
	
?>


<html>
	<body>

<?php

	$_SESSION["Employee_1"] = "Priyank Dhruv";
	$_SESSION["Employee_2"] = "Parth Makadiya";
	$_SESSION["Employee_3"] = "Shyam Virani";
	$_SESSION["Employee_4"] = "Param Ardesna";
	$_SESSION["Employee_5"] = "Hepi Chaniyara";
	$_SESSION["Employee_6"] = "Pritesh Sengra";
	
	echo "All Employees are Set..!!";
	
?>

	</body>
</html>