<?php
include('connection.php');
?>
<?php
if(isset($_POST['submit'])){
	$regno=$_POST['regno'];
	$name=$_POST['name'];
	$coursecode=$_POST['coursecode'];
	$coursename=$_POST['coursename'];
	$mark=$_POST['mark'];
	
	$sql="insert into details(regno,name,coursecode,coursename,mark)values('$regno','$name','$coursecode','$coursename','$mark')";
	$Query=mysqli_Query($conn,$sql);
	if($Query)
	{
		echo"<script>alert('success')</script>";
	}
	else
	{
		echo"<script>alert('fail')</script>";
	}
}
?>

<html>
<body>
<form action=""method="post">
<center>
<h1>Student mark information</h1>
<input type="number"name="regno">regno<br><br>
<input type="text"name="name">name<br><br>
<input type="varchar"name="coursecode">coursecode<br><br>
<input type="text"name="coursename">coursename<br><br>
<input type="number"name="mark"value="mark">mark<br><br>
<input type="submit"name="submit">
</center>
</body>
</html>

		
		
	
	