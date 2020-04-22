<div class="content-wrapper">
    <section class="content">
    <!--Judul-->
    <title><?php echo $judul;?></title>
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar guru</h3>
        </div>
      </div>
    <!--Akhir Judul-->
    <!--search-->
    <div class="row mt-3">
               <div class="col-md-10">
                  <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari data guru..." name="keyword">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="Submit" id="button-addon2">Cari</button>
                      </div>
                    </div>
                  </form>
               </div> 
            </div>
    <!--akhi search-->
    <!--pilih mapel-->
    <div class="row mt-">
          <div class="col-md-4">
            <form action="" method="post">
              
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="pilih">
                    <option selected>-- Pilih Mapel --</option>
                    <option>MATEMATIKA</option>
                    <option>AGAMA ISLAM</option>
                    <option>PENDIDIKAN PANCASILA</option>
                    <option>B INDONESIA</option>
                    <option>MATEMATIKA</option>
                    <option>B INGGRIS</option>
                    <option>SEJARAH</option>
                    <option>SENIBUDAYA</option>
                    <option>PENJAS</option>
                    <option>GURU BIDANG KEAHLIAN</option>
                    <option>ILMU PENGETAHUAN ALAM</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">pilih</button>
                  </div>
                </div>
            </from>
          </div>
        </div>
    <!--akhir pilih mapel--> 
      <!--tambah siswa-->
      <div class="row mt-4">
        <div class="col-md-5">
        <a href="<?=base_url(); ?>dataguru/tambah" class="btn btn-primary">+ Tambah Data Guru</a>
        </div>
      </div>
      <!--khir tambah siswa-->
            <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-11">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Guru
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
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mengajar</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        foreach( $oop as $mhs ) : ?>
                      <tr>
                        <th><?= $mhs['id'] ?></th>
                        <td><img src="<?=base_url(); ?>assets/foto/<?= $mhs['foto']; ?>" width="40" height="60"></td>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['ngajar'] ?></td>
                          <td>
                                <a class="badge badge-success btn-sm" href="<?= base_url(); ?>dataguru/view/<?= $mhs['id']; ?>">
                                
                                    View
                                </a>
                                <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>dataguru/edit/<?= $mhs['id']; ?>">
                                
                                  edit
                                </a>
                                <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>dataguru/hapus/<?= $mhs['id']; ?>">
                                    
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
              <!--akhir tabel-->
            <!--pagination-->
            <div class="row mb-5">
            <?= $this->pagination->create_links(); ?>
            </div>
            <!--akhr-->
    </section>
</div>