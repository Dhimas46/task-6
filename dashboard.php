<?php
if(!isset($_SESSION['nama']))
 {
?>
<script type="text/javascript">
alert('Anda Belum Login');
window.location="index.php";
</script>
<?php
} if ($_SESSION['level']!="admin") {
  ?>
  <script type="text/javascript">
  alert('Anda Bukan Admin!');
  window.location="index.php";
  </script>
  <?php
}
 ?>


<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Hallo <?php echo $_SESSION['nama'] ?> Anda adalah <?php echo $_SESSION['level'] ?></h1>
  </div>
  
  </div>
</div>
