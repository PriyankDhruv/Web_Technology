<html> 
	<head>
		<title>Student_Data_Reader</title>
	</head> 
	<body> 
		<fieldset style = "width:15%">
			<legend>Student Data Entry</legend> 
				<form name = "stud" method = "post" action = "Student[Data_Storage]_Driver.php"> 
					<br/>
					<input type = "number" name = "stud_enroll" placeholder = "Enrollment No."/>
					<br/>
					<br/>
					<input type = "text" name = "stud_name" placeholder = "Student Name"/>
					<br/>
					<br/>
					<input type = "number" name = "stud_sem" placeholder = "Current Semester"/> 
					<br/>
					<br/>
					<input type = "number" name = "stud_percentage" placeholder = "Percentage"/>
					<br/>
					<br/>
					<input type = "submit" name = "Submit" value = "Submit">
					<br/>
				</form>
		</fieldset>
	</body>
</html>	

<?php 

	if(isset($_POST['Submit']))
	{ 
		$stud_enroll = $_POST['stud_enroll']; 
		$stud_name = $_POST['stud_name']; 
		$stud_sem = $_POST['stud_sem']; 
		$stud_percentage = $_POST['stud_percentage']; 
 
		$server = "localhost"; 
		$db_uname  = "root"; 
		$db_pwd = ""; 
		$db_name = "student"; 
 
		$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Niti"); 
		mysqli_select_db($link, $db_name); 
  
		$query_1 = "insert into student values('".$stud_enroll."','".$stud_name."','".$stud_sem."','".$stud_percentage."')"; 
		$result_1 = mysqli_query($link, $query_1); 

		$query_2 = "select * from student"; 
		$result_2 = mysqli_query($link, $query_2);
		
		$count = mysqli_num_rows($result_2);
		if($count > 0)
		{ 
			echo "<br/>"."<br/>";
			echo "<table border='1'>"; 
			
				echo "<tr>";
					echo "<td>Enrollnment No</td>";
					echo "<td>Name</td>";
					echo "<td>Semester</td>";
					echo "<td>Percentage</td>";
				echo "</tr>"; 
 
				while($row = mysqli_fetch_array($result_2))
				{ 
					echo "<tr>"; 
						echo "<td>".$row['stud_enroll']."</td>"; 
						echo "<td>".$row['stud_name']."</td>"; 
						echo "<td>".$row['stud_sem']."</td>"; 
						echo "<td>".$row['stud_percentage']."%</td>"; 
					echo "</tr>"; 
				} 

			echo "</table>"; 

		} 
 
		else
		{ 
			echo "Data Not Found..!!"; 
		}
		
	}
	
?> 