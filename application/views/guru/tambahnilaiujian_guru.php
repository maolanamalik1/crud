

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
                <label for="semester">Semester</label>
                <select class="form-control" name="semester" id="semester">
                  <option>SEMESTER 1</option>
                  <option>SEMESTER 2</option>
                </select>
              </div>
            <div class="form-group">
                    <label for="mat_pel">Mata pelajaran</label>
                    <input type="text" name="mat_pel" class="form-control" id="mat_pel" autocomplete="off">
                <?= form_error('mat_pel','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="uh1">Nilai Ulangan Harian 1</label>
                    <input type="number" min="1" max="100" name="uh1" class="form-control" id="uh1" autocomplete="off">
                    <?= form_error('uh1','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="uh2">Nilai Ulangan Harian 2</label>
                    <input type="number" min="1" max="100" name="uh2" class="form-control" id="uh2" autocomplete="off">
                    <?= form_error('uh2','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="uh3">Nilai Ulangan Harian 3</label>
                    <input type="number" min="1" max="100" name="uh3" class="form-control" id="uh3" autocomplete="off">
                    <?= form_error('uh3','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="uh4">Nilai Ulangan Harian 4</label>
                    <input type="number" min="1" max="100" name="uh4" class="form-control" id="uh4" autocomplete="off">
                    <?= form_error('uh4','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="uh5">Nilai Ulangan Harian 5</label>
                    <input type="number" min="1" max="100" name="uh5" class="form-control" id="uh5" autocomplete="off">
                    <?= form_error('uh1','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="pts">Nilai Ulangan PTS</label>
                    <input type="number" min="1" max="100" name="pts" class="form-control" id="pts" autocomplete="off">
                    <?= form_error('pts','<small class="text-danger">','</small>');?>
                </div>
            <div class="form-group">
                    <label for="pas">Nilai Ulangan PAS</label>
                    <input type="number" min="1" max="100" name="pas" class="form-control" id="pas" autocomplete="off">
                    <?= form_error('pts','<small class="text-danger">','</small>');?>
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




