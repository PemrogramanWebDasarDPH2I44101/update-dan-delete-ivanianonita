<?php

require_once("db.php");
?>
<table border=1>
	<head>
		<th>Id</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Tanggal Lahir</th>
	</head>
	<tbody>
<?php
$sql = "select * from siswa";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		echo"<tr>";
		echo"<td>".$row["id"]."</td>";
		echo"<td>".$row["nama"]."</td>";
		echo"<td>".$row["nim"]."</td>";
		echo"<td>".$row["tgl_lahir"]."</td>";
		echo"<td>"."<a href='ubah.php?id=$id'>Edit</a>|<a href='delete.php?id=$id'>Delete</a>"."</td>";
		echo"</tr>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);
?>
</tbody>
</table>