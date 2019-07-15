<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>school</title>
</head>
<style>
.main{
	width:50%;
	margin:auto;
	height:600px;
	background-color:yellow;
	padding-top:150px;
	
}
.content{
	width:50%;
	margin:auto;
	padding:10px;
	background-color:red;

	/* position:absolute;
	top:20%; */
}
input[type="submit"]{
	text-align: center;
	border: none;
	height: 30px;
	width: 80px;
	/* background: #fb2525; */
	/* color: #fff; */
	border-radius: 10px;
	cursor:pointer;

}



</style>

<body>
<div class="main">
	<div class="content">
	<h1>Add New Student</h1>
	<?php
		include("db.php");
	
		$studentno = $_REQUEST['var'];

		echo"Studnet No:".$studentno."<br><br>";


		
	?>
    <form action="" class="newstudent" method="post">
    	Student Name:
    	<input type="text" name="name" ><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
		</div>
	</div>
</body>
</html>
<?php


	
	 if(isset($_REQUEST['submit'])){
		
		 $studentname = $_REQUEST['name'];
		 //echo $studentname;
		
		$insert_details = "insert into student(sNo,sName) values('$studentno','$studentname')";
		
		mysqli_query($con,$insert_details);
	 }
	
	
	


?>