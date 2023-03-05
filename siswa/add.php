<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Halaman Tambah Siswa</h1>
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
      <h3 class="card-title">Tambah Siswa</h3>

      <div class="card-tools">
      <a href="halaman.php?halaman=siswa" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp&nbspKembali</a>
      </div>
    </div>
<form enctype="multipart/form-data" action="siswa/simpan_siswa.php" method="post">
  <div class="card-body">
    <div class="row">
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">NIM</label>
        <input type="text" name="nim" class="form-control" maxlength="16" id="exampleInputEmail1" placeholder="Enter NIM" required>
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
      </div>
    </div>
    <input type="hidden" name="entry" value="<?= $_SESSION['nama'] ?>">
    <div class="row">
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control" minlength="8" id="exampleInputEmail1" placeholder="Enter Password" required>
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Telephone</label>
        <input type="text" name="telp" class="form-control" id="exampleInputEmail1" placeholder="Enter Telephone" required>
      </div>
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Level</label>
        <select class="form-control" name="level">
          <option value="" selected>-- Pilih Level --</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
    </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</section
