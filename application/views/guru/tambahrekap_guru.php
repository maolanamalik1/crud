

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
          <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 mt-3">
                    <div class="card">
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <input type="hidden" name="id_siswa" class="form-control" id="id_siswa" autocomplete="off" value="<?= $oop['absen']; ?>">
                </div>
            <div class="form-group">
                <label for="hri">Hari</label>
                <select class="form-control" name="hri" id="hri">
                  <option>--PILIH--</option>
                  <option>SENIN</option>
                  <option>SELASA</option>
                  <option>RABU</option>
                  <option>KAMIS</option>
                  <option>JUMAT</option>
                  <option>SABTU</option>
                </select>
                <?= form_error('hri','<small class="text-danger">','</small>');?>
            </div>
            <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="tgl" autocomplete="off">
                    <?= form_error('tgl','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                <label for="kete">Keterangan</label>
                <select class="form-control" name="kete" id="kete">
                  <option>--PILIH--</option>
                  <option>MASUK</option>
                  <option>SAKIT</option>
                  <option>IZIN</option>
                  <option>ALPHA</option>
                </select>
                <?= form_error('kete','<small class="text-danger">','</small>');?>
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




