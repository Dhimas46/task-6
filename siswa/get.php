
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Halaman Siswa</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Blank Page</li>
    </ol>
  </div>
</div>


<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Siswa</h3>
        <?php if ($_SESSION['level']!="user") { ?>
      <div class="card-tools">
      <a href="halaman.php?halaman=tambahsiswa" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp&nbspTambah Siswa</a>
      </div>
    <?php } ?>
    </div>
    <div class="card-body">
      <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Entry</th>
                  <?php if ($_SESSION['level']!="user") { ?>
                  <th>Password <span>(hash)</span> </th>
                  <?php } ?>
                  <th>Nomor</th>
                <?php if ($_SESSION['level']!="user") { ?>
                  <th style="width: 200px">Action</th>
                    <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $sql = $koneksi->query("SELECT * FROM users")
                 ?>
                 <?php while ($data = $sql->fetch_assoc()) {
                    ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nim'] ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['entry'] ?></td>
                  <?php if ($_SESSION['level']!="user") { ?>
                  <td><?= $data['password'] ?></td>
                  <?php } ?>
                  <td><?= $data['telp'] ?></td>
                <?php if ($_SESSION['level']!="user") { ?>
                  <td>
                    <a href="halaman.php?halaman=editsiswa&id=<?= $data['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                    <a href="siswa/hapus_siswa.php?id=<?=$data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                  <?php } ?>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div> -->
    </div>
    </div>

  </div>

</section>
