<?php
require '../koneksi/koneksi.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$password = md5($_POST ['password']);
$telp=$_POST['telp'];
$level=$_POST['level'];
$entry=$_POST['entry'];

$sql=mysqli_query($koneksi, "insert into users values('','$nim', '$nama', '$email', '$password', '$telp', '$level', '$entry')");
if ($sql)
{
  ?>
  <script type="text/javascript">
  alert('Data berhasil disimpan');
  window.location = '../halaman.php?halaman=siswa';
  </script>
  <?php
}
?>
