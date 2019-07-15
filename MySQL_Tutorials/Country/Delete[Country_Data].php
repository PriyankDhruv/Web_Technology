<?php
 
	$server = "localhost"; 
	$db_uname  = "root"; 
	$db_pwd = ""; 
	$db_name = "country"; 
	
	$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Niti"); 
	mysqli_select_db($link, $db_name); 

	$query_1 = "delete from country where city_name = 'Rajkot'"; 
	$result_1 = mysqli_query($link, $query_1); 
	
	echo "Data Deleted Successfully..!!";
	
	$query_2 = "select * from country"; 
	$result_2 = mysqli_query($link, $query_2); 
		
	$count = mysqli_num_rows($result_2);
	if($count > 0)
	{
		echo "<br/>"."<br/>";
		echo "<table border='1'>";
		
			echo "<tr>";
				echo "<td><b>City Name<b/></td>";
				echo "<td><b>Area<b/></td>";
				echo "<td><b>Population<b/></td>";
			echo "</tr>"; 
 
			while($row = mysqli_fetch_array($result_2))
			{ 
				echo "<tr>"; 
					echo "<td>".$row['city_name']."</td>"; 
					echo "<td>".$row['area']."</td>"; 
					echo "<td>".$row['population']."</td>"; 
				echo "</tr>"; 
			}
			
		echo "</table>"; 
		
	} 
  
	else
	{ 
		echo "Data Not Found..!!"; 
	} 
	
?> 