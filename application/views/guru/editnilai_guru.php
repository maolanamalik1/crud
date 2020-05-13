

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
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="id_siswa">Id siswa</label>
                    <input type="number" name="id_siswa" class="form-control" id="id_siswa" value="<?= $oop['id_siswa']; ?>">
                </div> 
            <div class="form-group">
                    <label for="ma_pel">Mata pelajaran</label>
                    <input type="text" name="ma_pel" class="form-control" id="ma_pel" value="<?= $oop['ma_pel']; ?>">
                </div>
            <div class="form-group">
                    <label for="n_p">Nilai pengetahuan</label>
                    <input type="text" name="n_p" class="form-control" id="n_p" value="<?= $oop['n_p']; ?>">
                </div>
            <div class="form-group">
                    <label for="kkm_p">KKM Pengetahuan</label>
                    <input type="text" name="kkm_p" class="form-control" id="kkm_p" value="<?= $oop['kkm_p']; ?>">
                </div>
            <div class="form-group">
                    <label for="n_k">Nilai Keterampilan</label>
                    <input type="text" name="n_k" class="form-control" id="n_k" value="<?= $oop['n_k']; ?>">
                </div>
            <div class="form-group">
                    <label for="kkm_k">KKM Keterampilan</label>
                    <input type="text" name="kkm_k" class="form-control" id="kkm_k" value="<?= $oop['kkm_k']; ?>">
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




