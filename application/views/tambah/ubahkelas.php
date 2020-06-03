

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
                    <label for="nama_kelas">nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $oop['nama_kelas']; ?>">
                    <?= form_error('nama_kelas','<small class="text-danger">','</small>');?>
                </div>

              <div class="form-group">
                <label>Nama Jurusan</label>
                <select class="form-control" name="id_jurusan" id="id_jurusan">
                <?php foreach( $jur as $k ): ?>
                    <?php if($k['no'] == $oop['id_jurusan']):?>
                      <option value="<?= $k['no']; ?>"selected><?= $k['nama_jurusan']; ?></option>
                      <?php else : ?>
                        <option value="<?= $k['no']; ?>"><?= $k['nama_jurusan']; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= form_error('id_jurusan') ?></small>
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




