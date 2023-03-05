<?php
require 'koneksi/koneksi.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$password = md5($_POST ['password']);
$telp=$_POST['telp'];

// $sql=mysqli_query($koneksi, "insert into users values('$nim', '$nama', '$email', '$password', '$telp', 'user', '')");

$sql = mysqli_query($koneksi, "INSERT INTO users (nim, nama, email, password, telp, level, entry) VALUES ('$nim', '$nama', '$email', '$password', '$telp', 'user', '')");
if ($sql)
{
  ?>
  <script type="text/javascript">
  alert('Data berhasil disimpan silahkan login');
  window.location="index.php";
  </script>
  <?php
}
?>
