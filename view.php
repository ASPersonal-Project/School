<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<style>
#stno{
	width:50%;
	margin:auto;
	background-color:yellow;
	padding:20px;
}
#mark{
	width:50%;
	margin:auto;
	background-color:yellow;
	
}

</style>
<body>
	
</body>
</html>


<?php
	include("db.php");
	
	$studentNo = $_REQUEST['var'];
	
	echo "<div id='stno'>Student No:".$studentNo."</div>";
	$get_name = "select sName from student where sNo='".$studentNo."'";
	$result1= mysqli_query($con,$get_name);
	
	while($row = mysqli_fetch_array($result1)){
		echo "<div id='stno'>Student Name:".$row['sName']."</div>";
	}
	
	$query2 = "select Mark,sCode from Student_subject";
	
	$result2 = mysqli_query($con,$query2);
	
	echo "<div id='mark'><h4> Subject Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Marks</h4></div>";
	 while($row1 = mysqli_fetch_array($result2)){
		 echo "<div id='mark'>".$row1['sCode']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row1['Mark']."</div>";
		 echo "<br>";
	 }

?>