<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>school</title>
</head>
<style>
.main{
	width:60%;
	margin:auto;
	height:600px;
	background-color:yellow;
	padding-top:150px
}
.content{
	width:60%;
	margin:auto;
	padding:30px;
	background-color:black;
	color:white;
}

</style>
<body>
	<div class="main">
    	<div class="content">
    	
    	    	<h1>Student Infomation System</h1>
    
    <form action="" class="search" method="post">
    	Enter Student NO:
    	<input type="text" name="sno" ><br><br>
        <input type="submit" value="Search" name="submit">
    </form>
    	</div>
    
    </div>
</body>
</html>
<?php 
include("db.php");

$get_sNo = "select sNo from student";

$query = mysqli_query($con,$get_sNo);

$found = 0;

if(isset($_REQUEST['submit'])){
	$studentNo = $_REQUEST['sno'];
while($row_sNo = mysqli_fetch_array($query)){
	if($row_sNo['sNo'] == $studentNo){
		$found = 1;
		break;
	}else{
		$found = 0;
	}
	
}
if($found ==1){
	header("location:view.php?var=".$studentNo);
}else{
	header("location:add.php?var=".$studentNo);
}
}





?>