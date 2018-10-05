<?php
require_once("db.php");
// menyimpan data kedalam variabel

$id          = $_POST['id'];
$nama         = $_POST['nama'];
$nim          = $_POST['nim'];
$tgl_lahir    = $_POST['tgl_lahir'];

// query SQL untuk insert data
$sql= " UPDATE siswa SET nama='$nama', nim='$nim',tgl_lahir='$tgl_lahir' where id='$id'";
if(mysqli_query($conn, $sql)){
	header("Location:tampilku.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($conn);
}
// mengalihkan ke halaman index.php

?>