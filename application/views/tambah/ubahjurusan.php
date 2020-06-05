
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">edit kelas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">tambah data</li>
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 mt-3">
                    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" value="<?= $oop['nama_jurusan']; ?>">
                    <?= form_error('nama_jurusan','<small class="text-danger">','</small>');?>
                </div>
                <button type="reset" class="btn btn-danger">reset</button>
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




