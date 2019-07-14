<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>school</title>
</head>

<body>
	<h1>Add New Student</h1>
    <form action="" class="newstudent">
    	student Name:
    	<input type="text" name="name" ><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
	include("db.php");
	
	$studentno = $_REQUEST['var'];
	
	echo"Studnet No:".$sno."<br>";
	
	if(isset($_REQUEST['submit']){
		$sunentname = $_REQUEST['name'];
		
		$inert_details = "insert into student(SNO,Sname) values('$studentno',$sunentname')"
		
		mysqli_query($con,$insert_details);
	}
	
	
	


?>