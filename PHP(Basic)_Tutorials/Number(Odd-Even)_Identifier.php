<html>
	<head>
		<title>Odd-Even_Number_Identifier</title>
	</head>
	<body>
		<form name = "oddEven" method = "get">
			<input type = "text" name = "number" placeholder = "Enter any Number" required = "required"/>
			&nbsp;<input type = "submit" name = "check_oddEven" value="CheckOut"/>
		</form>
	</body>
</html>

<?php

	if (isset($_GET["check_oddEven"] ) ) 
	{
		$number = $_GET["number"];
		if($number%2 == 0)
		{
			echo "Number : ". $number ." is an even number.";
		}
		else
		{
			echo "Number : ". $number ." is a odd number.";
		}
	}
	
?>