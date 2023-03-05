<?php
if(!isset($_SESSION['nama']))
 {
?>
<script type="text/javascript">
alert('Anda Belum Login');
window.location="index.php";
</script>
<?php
}
 ?>

<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Hallo <?php echo $_SESSION['nama'] ?></h1>
  </div>
  <div class="col-md-12 mt-3">
      <div class="card">
        <div class="card-body">

        </div>
      </div>
  </div>
</div>
