<!--student information(name , percentage , enrollment_Number , semester) -->

<html>
	<head>
		<title>Enter_Student_Information</title>
	</head>
	<body>
		<form name="StudentInfo" method = "get">
			
			<input type = "text" name = "name" placeholder = "Enter Your Name : "/>
			<br/>
			<br/>
			<input type = "floatval" name = "cgpa" placeholder = "Enter Your Curent CGPA : "/>
			<br/>
			<br/>
			<input type = "Number" name = "enroll" placeholder = "Enter Your Enrollment No. : "/>
			<br/>
			<br/>
			<input type = "Number" name = "sem" placeholder = "Enter Your Current Semester : "/>
			<br/>
			<br/>
			<input type = "submit" name = "display" value = "DisplayInfo"/>
		</form>
	</body>
</html>

<?php
	
	if (isset($_GET["display"] ) ) 
	{
		echo "Name Of Student&nbsp;&nbsp;  : ".$_GET["name"]."<br/><br/>";
		
		echo "Current CGPA Of Student&nbsp;&nbsp;: ".$_GET["cgpa"]."<br/><br/>";
		
		echo "Enrollment Number&nbsp;&nbsp;: ".$_GET["enroll"]."<br/><br/>";
		
		echo "Current Semester&nbsp;&nbsp; : ".$_GET["sem"]."<br/><br/>";
	}
	
?>	
