<?php
require '../koneksi/koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = mysqli_query($koneksi, "update users set nim = '$nim',
nama = '$nama', email = '$email', password = '$password', telp = '$telp', level = '$level' where id = '$id' ");

if ($sql) {
 ?>
 <script type="text/javascript">
   alert ('Data Berhasil Diubah');
   window.location = '../halaman.php?halaman=siswa';
 </script>
 <?php
}
?>
