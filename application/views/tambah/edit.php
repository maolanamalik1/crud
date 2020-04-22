

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">tambah data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">tambah data</li>
            </ol>
          </div><!-- /.col -->
          <div class="container">
          <div class="row">
        <div class="col -md-11">
            <div class="col-md-11">
                    <div class="card">
        <div class="card-body">
          <?php if (validation_errors() ) : ?>
          <?= validation_errors(); ?>
          <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
            <div class="form-group">
                <label for="kelamin">Kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                  <option>rekayasa perangkat lunak</option>
                  <option>tata boga</option>
                  <option>tata busana</option>
                  <option>perhotelan</option>
                </select>
              </div>
            <div class="form-group">
                    <label for="agama">agama</label>
                    <input type="text" name="agama" class="form-control" id="agama">
                </div>
            <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat"class="form-control" id="alamat">
                </div>
            <div class="form-group">
                    <label for="nis">nis</label>
                    <input type="text" name="nis"class="form-control" id="nis">
                </div>
                <div class="form-group">
                    <label for="foto">ubah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary"><i class='fas fa-save'></i>  Simpan data</button>
            </form>

        </div>
        </div>
</div>
</div>
</div>
</div>

          <div class="section"></div>
    <!-- /.content-header -->




