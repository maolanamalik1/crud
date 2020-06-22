<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar raport Siswa</h3>
        </div>
      </div>
      <!--akhir judul-->
      <!--sarch-->
            <div class="row mt-3">
               <div class="col-md-12">
                  <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword" autocomplete="off">
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
            <!--validasi-->
            <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Raport siswa
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
                <h3 class="card-title">Daftar siswa</h3>
                </div>
                <!--card body-->
              <div class="card-body table-responsive p-0" style="height: 400px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>id</th>
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
                  <td><?= $mhs['nama_kelas'] ?></td>
                    <td>
                          <a class="badge badge-success btn-sm" href="<?= base_url(); ?>siswaguru/raport/<?=$mhs['absen'];?>">
                          
                             Raport
                          </a>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>siswaguru/printraport/<?=$mhs['absen'];?>">
                          
                            print Raport
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>siswaguru/pdfgenerator/<?=$mhs['absen'];?>">
                          
                            pdf Raport
                          </a>
                          <a class="badge badge-success btn-sm" href="<?= base_url(); ?>siswaguru/excelrapot/<?=$mhs['absen'];?>">
                          
                            Excel Raport
                          </a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <!--footer-->
            <div class="card-footer clearfix">
            <?= $this->pagination->create_links(); ?>
            </div>
            <!--footer-->
            </div>
          </div>
        </div>
      <!--Akhir-table-->
          
        </div>
    </section>
</div>