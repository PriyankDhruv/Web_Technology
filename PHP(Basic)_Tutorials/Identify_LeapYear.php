<html>
	<head>
		<title>LeapYear_Identifier</title>
	</head>
	<body>
		<form name = "leapYear" method = "get">
			<input type = "text" name = "yr" placeholder = "Enter any Year" required = "required"/>
			&nbsp;<input type = "submit" name = "check_leapYear" value = "CheckOut"/>
		</form>
	</body>
</html>

<?php
	
	if (isset($_GET["check_leapYear"] ) ) 
	{
		$year = $_GET["yr"];
		if($year%4 == 0)
		{
			echo "Year : ". $year ." is a leap year.";
		}
		else
		{
			echo "Year : ". $year ." is not a leap year.";
		}
	}

?>