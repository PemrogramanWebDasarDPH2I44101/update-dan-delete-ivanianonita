<?php
require_once("db.php");
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from siswa where id ='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:tampilku.php");
?>