<?php

	setcookie("Priyank", "", time() - 3600);	// set the expiration date to one hour ago
	
?>

<html>
	<body>

<?php

	echo "Cookie Name : 'Priyank' is deleted.";
	
?>

	</body>
</html>