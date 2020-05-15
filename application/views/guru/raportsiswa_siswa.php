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
      <div class="row mt-4">
        <div class="col-md-2">
        <a href="<?=base_url(); ?>siswaguru/tambahnilai" class="btn btn-primary">+ Tambah nilai raport</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-11">
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
        <div class="col-md-11">
            <table class="table table-bordered mt-2 mb-5">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Mapel</th>
                  <th scope="col">Nilai p</th>
                  <th scope="col">kkm p</th>
                  <th scope="col">nilai k</th>
                  <th scope="col">kkm k</th>
                  <th scope="col">Action</th>
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
      <!--Akhir-table-->
          
        
    </section>
</div>