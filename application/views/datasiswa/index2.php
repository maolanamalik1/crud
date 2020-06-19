<div class="content-wrapper">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar Siswa</h3>
        </div>
      </div>
      <!--akhir judul-->
      <!--sarch-->
            <div class="row mt-3">
               <div class="col-md-10">
                  <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="Submit" id="button-addon2">Cari</button>
                      </div>
                    </div>
                  </form>
               </div> 
            </div>
      <!--akhir search-->
      <!--pilih kelas-->
        <div class="row mt-">
          <div class="col-md-4">
            <form action="" method="post">
              
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="pilih">
                    <option selected>-- pilih kelas --</option>
                  <?php foreach( $kel as $k ): ?>
                  <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">pilih</button>
                  </div>
                </div>
            </from>
          </div>
        </div>
      <!--akhir pilh kelas-->
      <!--tambah siswa-->
      <div class="row mt-4">
        <div class="col-md-5">
        <a href="<?=base_url(); ?>Tambah/tambah" class="btn btn-primary">+ Tambah Data Siswa</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-11">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data siswa
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
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Ujian</h3>
                </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed">
			<thead>
                <tr>
                  <th>#</th>
                  <th>Absen</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $mhs['absen'] ?></th>
                  <th><?= $mhs['absen2'] ?></th>
                  <td><img src="<?=base_url(); ?>assets/foto/<?= $mhs['foto']; ?>" width="40" height="60"></td>
                  <td><?= $mhs['nama'] ?></td>
                  <td><?= $mhs['kelas'] ?></td>
                    <td>
                          <a class="badge badge-success btn-sm" href="<?= base_url(); ?>datasiswa/view/<?=$mhs['absen'];?>">
                          
                              View
                          </a>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>datasiswa/edit/<?=$mhs['absen'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>datasiswa/hapus/<?= $mhs['absen']; ?>" onclick="return confirm('Anda yakin?');">
                              
                              
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
            <!--pagination-->
            <div class="row mb-5">
            <?= $this->pagination->create_links(); ?>
            </div>
            <!--akhr-->
      <!--Akhir-table-->
          
        
    </section>
</div>