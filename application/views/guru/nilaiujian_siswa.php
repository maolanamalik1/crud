<div class="content-wrapper">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Nilai Ulangan Siswa</h3>
        </div>
      </div>
      <!--akhir judul-->

      <!--tambah siswa-->
      <div class="row mt-2">
        <div class="col-md-2">
        <a href="<?=base_url(); ?>siswaguru/tambahnilaiujian/<?= $iip['absen']; ?>" class="btn btn-primary">+Tambah nilai ujian</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">nilai ujian siswa
            <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!--akhir vali-->
      <!--table-->
      <div class="row">
        <div class="col-md-12 mt-2">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai ujian</h3>
                </div>
                <!--card body-->
              <div class="card-body table-responsive p-0" style="height: 400px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Semester</th>
                  <th>Mapel</th>
                  <th>uh1</th>
                  <th>uh2</th>
                  <th>uh3</th>
                  <th>uh4</th>
                  <th>uh5</th>
                  <th>PTS</th>
                  <th>PAS</th>
                  <th>Action</th>
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
                    <td>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>siswaguru/editnilaiujian/<?=$mhs['id'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>siswaguru/hapusujian/<?= $mhs['id']; ?>" onclick="return confirm('Anda yakin ingin menghapusnya?');">
                              
                              </i>
                              Delete
                          </a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      <!--Akhir-table-->
          
        
    </section>
</div>