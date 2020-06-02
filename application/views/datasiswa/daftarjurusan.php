<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar jurusan</h3>
        </div>
      </div>
      <!--akhir judul-->

      <!--tambah siswa-->
      <div class="row mt-4">
        <div class="col-md-2">
        <a href="<?=base_url(); ?>datasiswa/tambahkelas" class="btn btn-primary">+ Tambah jurusan</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-11">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Daftar jurusan
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
        <div class="col-md-12">
            <table class="table table-bordered mt-2 mb-5">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <td><?= $mhs['nama_jurusan'] ?></td>
                    <td>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>datasiswa/editjurusan/<?=$mhs['id'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>datasiswa/hapusjurusan/<?= $mhs['id']; ?>" onclick="return confirm('Anda yakin?');">
                              
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
</div>