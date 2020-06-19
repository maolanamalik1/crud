<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Nilai Siswa</h3> 
        </div>
      </div>
      <!--tabel-->
              <!--table-->
        <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Ujian</h3>
                </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Semester</th>
                  <th>Mata pelajaran</th>
                  <th>UH1</th>
                  <th>UH2</th>
                  <th>UH3</th>
                  <th>UH4</th>
                  <th>UH5</th>
                  <th>PTS</th>
                  <th>PAS</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <td><?= $mhs['semester'] ?></td>
                  <td><?= $mhs['mat_pel'] ?></td>
                  <td><?= $mhs['uh1'] ?></td>
                  <td><?= $mhs['uh2'] ?></td>
                  <td><?= $mhs['uh3'] ?></td>
                  <td><?= $mhs['uh4'] ?></td>
                  <td><?= $mhs['uh5'] ?></td>
                  <td><?= $mhs['pts'] ?></td>
                  <td><?= $mhs['pas'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
      <!--akhir tabel-->
      <!--tabel rapot-->
              <!--table-->
        <div class="row">
        <div class="col-md-12 mt-2 mb-5">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Raport</h3>
                <div class="card-tools">
                <a href="<?=base_url(); ?>user/printraportsiswa" class="btn btn-warning">PRINT</a>
				<a href="<?=base_url(); ?>user/pdfgenerator" class="btn btn-warning">EXPORT PDF</a>
				<a href="<?=base_url(); ?>user/excelrapot" class="btn btn-warning">EXPORT EXCEL</a>
                </div>
                </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Mata pelajaran</th>
                  <th>Nilai pengetahuan</th>
                  <th>kkm pengetahuan</th>
                  <th>nilai keterampilan</th>
                  <th>kkm keterampilan</th>
                  <th>keterangan</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $iip as $mhs ) : ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <td><?= $mhs['ma_pel'] ?></td>
                  <td><?= $mhs['n_p'] ?></td>
                  <td><?= $mhs['kkm_p'] ?></td>
                  <td><?= $mhs['n_k'] ?></td>
                  <td><?= $mhs['kkm_k'] ?></td>
                  <td><?= $mhs['ket'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
        <!--Akhir tabel-->
      
</div>