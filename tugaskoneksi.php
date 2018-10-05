<?php
require_once("db.php");
//$servername = "localhost";
//$username = "root";
//$password = "";
//$db_name="webdasar";

// Create connection
//$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
 
$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST["nim"];
$tgl_lahir=$_POST['tgl_lahir'];

$sql="insert into siswa(id,nama,nim,tgl_lahir) values ('$id','$nama','$nim','$tgl_lahir')";

if(mysqli_query($conn,$sql)){
 header("Location:tampilku.php");
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 