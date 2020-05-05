

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit dan Tambah Score Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">Score Siswa</li>
            </ol>
          </div><!-- /.col -->
          <div class="container">
          <div class="row">
        <div class="col -md-11">
            <div class="col-md-11">
                    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <!--Nilai pengetahuan-->
            <h1>Nilai Pengetahuan</h1>
            <div class="form-group mt-2">
                    <label for="n_islam">Pendidikan agama</label>
                    <input type="number" min="0" max="100" name="n_islam" class="form-control" id="n_islam" value="<?= $oop['n_islam'];?>">
                </div>
            <div class="form-group">
                    <label for="n_panca">Pendidikan kewarganegaraan</label>
                    <input type="number" min="0" max="100" name="n_panca" class="form-control" id="n_panca" value="<?= $oop['n_panca'];?>">
                </div>
            <div class="form-group">
                    <label for="n_indo">Bahasa indo</label>
                    <input type="number" min="0" max="100" name="n_indo" class="form-control" id="n_indo" value="<?= $oop['n_indo'];?>">
                </div>
            <div class="form-group">
                    <label for="n_mtk">matematika</label>
                    <input type="number" min="0" max="100" name="n_mtk" class="form-control" id="n_mtk" value="<?= $oop['n_mtk'];?>">
                </div>
            <div class="form-group">
                    <label for="n_inggris">Bahasa inggris</label>
                    <input type="number" min="0" max="100" name="n_inggris" class="form-control" id="n_inggris" value="<?= $oop['n_inggris'];?>">
                </div>
            <div class="form-group">
                    <label for="n_sejarah">sejarah</label>
                    <input type="number" min="0" max="100" name="n_sejarah" class="form-control" id="n_sejarah" value="<?= $oop['n_sejarah'];?>">
                </div>
            <div class="form-group">
                    <label for="n_seni">seni</label>
                    <input type="number" min="0" max="100" name="n_seni" class="form-control" id="n_seni" value="<?= $oop['n_seni'];?>">
                </div>
            <div class="form-group">
                    <label for="n_penjas">penjas</label>
                    <input type="number" min="0" max="100" name="n_penjas"class="form-control" id="n_penjas" value="<?= $oop['n_penjas'];?>">
                </div>
            <div class="form-group">
                    <label for="n_ahli">nilai bidang keahlian</label>
                    <input type="number" min="0" max="100" name="n_ahli"class="form-control" id="n_ahli" value="<?= $oop['n_ahli'];?>">
                </div>
            <!--Akhir nilai pengetahuan-->
            <!--Nilai Keterampilan-->
            <h1>Nilai Keterampilan</h1>
            <div class="form-group mt-2">
                    <label for="k_islam">Pendidikan agama</label>
                    <input type="number" min="0" max="100" name="k_islam" class="form-control" id="k_islam" value="<?= $oop['k_islam'];?>">
                </div>
            <div class="form-group">
                    <label for="k_panca">Pendidikan kewarganegaraan</label>
                    <input type="number" min="0" max="100" name="k_panca" class="form-control" id="k_panca" value="<?= $oop['k_panca'];?>">
                </div>
            <div class="form-group">
                    <label for="k_indo">Bahasa indo</label>
                    <input type="number" min="0" max="100" name="k_indo" class="form-control" id="k_indo" value="<?= $oop['k_indo'];?>">
                </div>
            <div class="form-group">
                    <label for="k_mtk">matematika</label>
                    <input type="number" min="0" max="100" name="k_mtk" class="form-control" id="k_mtk" value="<?= $oop['k_mtk'];?>">
                </div>
            <div class="form-group">
                    <label for="k_inggris">Bahasa inggris</label>
                    <input type="number" min="0" max="100" name="k_inggris" class="form-control" id="k_inggris" value="<?= $oop['k_inggris'];?>">
                </div>
            <div class="form-group">
                    <label for="k_sejarah">sejarah</label>
                    <input type="number" min="0" max="100" name="k_sejarah" class="form-control" id="k_sejarah" value="<?= $oop['k_sejarah'];?>">
                </div>
            <div class="form-group">
                    <label for="k_seni">seni</label>
                    <input type="number" min="0" max="100" name="k_seni" class="form-control" id="k_seni" value="<?= $oop['k_seni'];?>">
                </div>
            <div class="form-group">
                    <label for="k_penjas">penjas</label>
                    <input type="number" min="0" max="100" name="k_penjas"class="form-control" id="k_penjas" value="<?= $oop['k_penjas'];?>">
                </div>
            <div class="form-group">
                    <label for="k_ahli">nilai bidang keahlian</label>
                    <input type="number" min="0" max="100" name="k_ahli"class="form-control" id="k_ahli" value="<?= $oop['k_ahli'];?>">
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




