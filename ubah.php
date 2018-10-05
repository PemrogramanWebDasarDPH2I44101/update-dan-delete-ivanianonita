<?php
require_once("db.php");

$id=$_GET['id'];

$query=mysqli_query($conn,"select * from siswa where id='$id'");
$row=mysqli_fetch_array($query);

function acive_radio_button($value,$input){
	$result = $input==$result?'checked':'';
	return $result;
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">
	<table>
	<form action="update.php" method="POST">
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['id']; ?>" name="id"></td>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
		</tr>

		<tr>
			<td>tanggallahir</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['tgl_lahir']; ?>" name="tgl_lahir"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</form>
</table>

</body>
</html>