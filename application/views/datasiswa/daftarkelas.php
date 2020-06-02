<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar Kelas</h3>
        </div>
      </div>
      <!--akhir judul-->

      <!--tambah siswa-->
      <div class="row mt-4">
        <div class="col-md-2">
        <a data-toggle="modal" data-target="#tambahkelasModal" class="btn btn-primary">+ Tambah Kelas</a>
        </div>
      </div>
      <!--khir tambah siswa-->
      <!--validasi-->
      <?php if($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Daftar kelas
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
                  <th scope="col">Kelas</th>
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
                  <td><?= $mhs['nama_kelas'] ?></td>
                  <td><?= $mhs['nama_jurusan'] ?></td>
                    <td>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>datasiswa/editkelas/<?=$mhs['id'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>datasiswa/hapuskelas/<?= $mhs['id']; ?>" onclick="return confirm('Anda yakin?');">
                              
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
       <!-- Modal -->
    <div class="modal fade" id="tambahkelasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah kelas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action=" <?= base_url('datasiswa/tambahkelas') ?> ">

              <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas"  id="nama_kelas" class="form-control" autocomplete="off">
                <small class="text-danger"><?= form_error('nama_kelas') ?></small>
              </div>

              <div class="form-group">
                <label>Nama Jurusan</label>
                <select class="form-control" name="id_jurusan" id="id_jurusan">
                  <option value="1">--Wajib Diisi--</option>
                  <?php foreach( $jur as $k ): ?>
                  <option value="<?= $k['id']; ?>"><?= $k['nama_jurusan']; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= form_error('id_jurusan') ?></small>
              </div>

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--akhir modal-->
                <!-- Modal -->
    <div class="modal fade" id="editkelasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form edit kelas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action=" <?= base_url('datasiswa/tambahkelas') ?> ">

              <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas"  id="nama_kelas" class="form-control" <?= $iip['nama_kelas']; ?> autocomplete="off">
                <small class="text-danger"><?= form_error('nama_kelas') ?></small>
              </div>

              <div class="form-group">
                <label>Nama Jurusan</label>
                <select class="form-control" name="id_jurusan" id="id_jurusan">
                <?php foreach( $jur as $k ): ?>
                    <?php if($k['id'] == $oop['id_jurusan']):?>
                      <option value="<?= $k['id']; ?>"selected><?= $k['nama_jurusan']; ?></option>
                      <?php else : ?>
                        <option value="<?= $k['id']; ?>"><?= $k['nama_jurusan']; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= form_error('id_jurusan') ?></small>
              </div>

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--akhir modal--> 
        
    </section>
  </div>
</div>