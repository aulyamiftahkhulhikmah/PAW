<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-color: pink;">
<?php
include "koneksi.php";
$id=$_GET['id'];
$sql = "DELETE FROM tbl_050 WHERE id_customer=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Delete data gagal";
}else{
    echo "Delete data customer berhasil<br/>";
    echo "<a href='customer.php'>Show Data</a>";
}
?>
</body>
</html>