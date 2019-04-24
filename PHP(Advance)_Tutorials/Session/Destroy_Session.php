<?php

	session_start();

?>

<html>
	<body>

<?php

	session_unset(); 

	session_destroy();

	echo "All Employees went for a Holiday."."<br/>";
	echo "<br/>";
	echo "Thus, the Session is Destroyed."
	
?>

	</body>
</html>