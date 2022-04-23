<?php
include "koneksi.php";
$id=$_GET['id'];
$sql = "DELETE FROM tbl_050 WHERE id_050=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Delete data gagal";
}else{
    echo "Delete data siswa berhasil<br/>";
    echo "<a href='siswa.php'>Show Data</a>";
}
?>