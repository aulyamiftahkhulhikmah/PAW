<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
<?php
include "koneksi.php";
$id=$_GET['id'];
$sql="SELECT*FROM tbl_050 WHERE id_050=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Query Salah";
}
?>
    <h1>Form Tambah Siswa</h1>
    <?php
        while($row=mysqli_fetch_array($hasil))
        {
    ?>
    <form method="POST" action="update.php">
        <input type="hidden" name="id_050" value="<?php echo $row['id_050'];?>">
        Nama 050 : <input type="text" name="nama_050" value="<?php echo $row['nama_050'];?>"><br/>
        Email 050 : <input type="text" name="email_050" value="<?php echo $row['email_050'];?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php } ?>
</body>
</html>
