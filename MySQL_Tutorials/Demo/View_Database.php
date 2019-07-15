<?php 

	$server = "localhost"; 
	$db_uname  = "root"; 
	$db_pwd = ""; 
	$db_name = "login"; 
 
	$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Piyu"); 
	mysqli_select_db($link, $db_name);
	
	$query = "select * from login"; 
	$result = mysqli_query($link, $query); 
	
	$count = mysqli_num_rows($result); 
	if($count > 0)
	{ 
		echo "<br/>"."<br/>";
		echo "<table border='1'>"; 
		
			echo "<tr>";
				echo "<td><b>Username</b></td>";
				echo "<td><b>Password</b></td>";
			echo "</tr>"; 

			while($row = mysqli_fetch_array($result))
			{ 
				echo "<tr>"; 
					echo "<td>".$row['username']."</td>"; 
					echo "<td>".$row['password']."</td>"; 
				echo "</tr>"; 
			}
			
		echo "</table>"; 
		
	}
	
	else
	{ 
		echo "Data Not Found..!!"; 
	}
	
	echo "<br/>"."<br/>";
	echo "Want to Insert More Data ?";
	echo "<br/>"."<br/>";
	echo "If Yes, then ";
	echo "<a href = 'Insert_[Data]_Operator.php'>Click here</a>";
	
	echo "<br/>"."<br/>";
	echo "Want to Add New-Column to the Current Data ?";
	echo "<br/>"."<br/>";
	echo "If Yes, then ";
	echo "<a href = 'Alter_[Column]_Operator.php'>Click here</a>";
	
?>