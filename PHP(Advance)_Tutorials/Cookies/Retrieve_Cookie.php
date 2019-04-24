
<?php

	$Cookie_Name = "Priyank_Dhruv";
	$Cookie_Value = "Piyu";
	setcookie($Cookie_Name, $Cookie_Value, time() + (86400 * 30), "/");  // 86400 = 1 day	
	
?>

<html>
	<body>
	
<?php

	if(!isset($_COOKIE[$Cookie_Name])) 
	{
		echo "Cookie Name  : " . $Cookie_Name . " is not set!";
	} 
	else 
	{
		echo "Cookie Name  : " . $Cookie_Name . " is set!"."<br>";
		echo "Cookie Value : " . $_COOKIE[$Cookie_Name];
	}
	
?>

	</body>
</html>