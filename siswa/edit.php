<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Halaman Edit Siswa</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Blank Page</li>
    </ol>
  </div>
</div>


<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Siswa</h3>
      <div class="card-tools">
      <a href="halaman.php?halaman=siswa" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp&nbspKembali</a>
      </div>
    </div>
    <?php
    $sql = mysqli_query($koneksi, "select * from users where id = '$_GET[id]'");
    if ($data = mysqli_fetch_array($sql))
    {
     ?>
<form enctype="multipart/form-data" action="siswa/update_siswa.php" method="post">
  <div class="card-body">
    <div class="row">
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">NIM</label>
        <input type="text" name="nim" class="form-control" maxlength="16" id="exampleInputEmail1" value="<?= $data['nim'] ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?= $data['email'] ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $data['nama'] ?>">
      </div>
    </div>
    <div class="row">
      <input type="hidden" name="password" value="<?= $data['password'] ?>">
      <input type="hidden" name="id" value="<?= $data['id'] ?>">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Telephone</label>
        <input type="text" name="telp" class="form-control" id="exampleInputEmail1" value="<?=$data['telp'] ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Level</label>
        <select class="form-control" name="level">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile">
          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
    </div> -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php } ?>
</div>
</section
