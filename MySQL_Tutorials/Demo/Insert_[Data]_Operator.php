<html> 
	<head>
		<title>Insert_Data_Operator</title>
	</head> 
	<body> 
		<fieldset style = "width:15%">
			<legend>Enter Login Details</legend>
				<form name = "insert" method = "post" action = "Insert_[Data]_Operator.php">
					<br/>
					<input type = "text" name = "username" placeholder = "Username"/>
					<br/> 
					<br/>
					<input type = "password" name = "password" placeholder = "Password"/>
					<br/>
					<br/>
					<input type = "submit" name = "Submit" value = "Submit"/>
					<br/>
				</form>
		</fieldset>
	</body>
</html> 

<?php
 
	if(isset($_POST['Submit']))
	{ 
		$uname = $_POST['username']; 
		$pwd = $_POST['password']; 

		$server = "localhost"; 
		$db_uname  = "root"; 
		$db_pwd = ""; 
		$db_name = "login";
		
		$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Piyu"); 
		mysqli_select_db($link, $db_name);
		
		$query = "insert into login values('".$uname."','".$pwd."')"; 
		$result = mysqli_query($link, $query); 
		
		echo "<br/>";
		echo "Data Inserted SuccessFully..!!";
		echo "<br/>"."<br/>";
		echo "Want to View Inserted Data ? ";
		echo "If Yes, then ";
		echo "<a href = 'View_Database.php'>Click here</a>"; 
		
	} 
	
?> 