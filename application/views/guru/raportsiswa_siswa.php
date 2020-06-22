<div class="content-wrapper">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Nilai Raport Siswa</h3>
        </div>
      </div>
      <!--akhir judul-->

      <!--tambah siswa-->
      <div class="row mt-2">
        <div class="col-md-2">
        <a href="<?=base_url(); ?>siswaguru/tambahnilai/<?= $iip['absen']; ?>" class="btn btn-primary">+Tambah nilai raport</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">nilai raport siswa
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
                <h3 class="card-title">Nilai raport</h3>
                </div>
                <!--card body-->
              <div class="card-body table-responsive p-0" style="height: 400px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Mapel</th>
                  <th>Nilai p</th>
                  <th>kkm p</th>
                  <th>nilai k</th>
                  <th>kkm k</th>
                  <th>keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <td><?= $mhs['ma_pel'] ?></td>
                  <td><?= $mhs['n_p'] ?></td>
                  <td><?= $mhs['kkm_p'] ?></td>
                  <td><?= $mhs['n_k'] ?></td>
                  <td><?= $mhs['kkm_k'] ?></td>
                  <td><?= $mhs['ket'] ?></td>
                    <td>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>siswaguru/editnilai/<?=$mhs['id'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>siswaguru/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Anda yakin?');">
                              
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
      <div class="row mt-2 mb-3">
            <div class="col-md-10">
            </div>
            <div class="col=md-2">
            <a href="<?= base_url(); ?>siswaguru/report" class="btn btn-success mb-2"><-Kembali</a>
            </div>
      </div>
                  
    </section>
</div>