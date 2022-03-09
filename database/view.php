<?php
include('connection.php');
$result=mysqli_query($conn,"SELECT * FROM details");
if($result->num_rows>0){
	echo"<table border=2 cell padding=5px cell spacing=6px>";
	 echo"<tr>";
	    echo"<th>id</th>";
		echo"<th>regno</th>";
		echo"<th>name</th>";
		echo"<th>coursecode</th>";
		echo"<th>coursename</th>";
		echo"<th>mark</th>";
	 echo"</tr>";
	 
	 while($row=$result->fetch_assoc()){
		 echo"<tr>";
		  echo"<td>" .$row['id']. "</td>";
		  echo"<td>" .$row['regno']. "</td>";
		  echo"<td>" .$row['name']. "</td>";
		  echo"<td>" .$row['coursecode']. "</td>";
		  echo"<td>" .$row['coursename']. "</td>";
		echo"<td>" .$row['name']. "</td>";
		echo"</tr>";
	 }
	 echo"<table>";
}else{
	echo"<fail>";
}
?>