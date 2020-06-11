

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark mb-2">tambah data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">datasiswa</li>
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 mt-2">
                    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
                    <small class="text-danger"><?= form_error('nama');?></small>
                </div>
            <div class="form-group">
                    <label for="absen2">Absen</label>
                    <input type="number" min="1" max="36" name="absen2" class="form-control" id="absen2" autocomplete="off">
                    <small class="text-danger"><?= form_error('absen2');?></small>
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" autocomplete="off">
                    <small class="text-danger"><?= form_error('email');?></small>
                </div>
            <div class="form-group">
                <label for="kelamin">Kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
                <small class="text-danger"><?= form_error('kelamin');?></small>
            </div>
            <div class="form-group">
                <label for="id_kelas">kelas</label>
                <select class="form-control" name="id_kelas" id="id_kelas">
                  <option value="1">--Wajib Diisi--</option>
                  <?php foreach( $kel as $k ): ?>
                  <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= form_error('id_kelas');?></small>
              </div>
              <div class="form-group">
                <label for="agama">agama</label>
                <select class="form-control" name="agama" id="agama">
                  <option>Islam</option>
                  <option>kristen</option>
                  <option>katholik</option>
                  <option>hindu</option>
                  <option>budha</option>
                  <option>etc</option>
                </select>
                <small class="text-danger"><?= form_error('agama');?></small>
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                  <small class="text-danger"><?= form_error('alamat');?></small>
                </div>
            <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" name="nis" class="form-control" id="nis" autocomplete="off">
                    <small class="text-danger"><?= form_error('nis');?></small>
                </div>
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" autocomplete="off">
                    <small class="text-danger"><?= form_error('username');?></small>
                </div>
            <div class="form-group">
                    <label for="passwod">password</label>
                    <input type="text" name="passwod" class="form-control" id="passwod" autocomplete="off">
                    <small class="text-danger"><?= form_error('passwod');?></small>
                </div>

                <div class="form-group">
                    <label for="foto">Tambah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <button type="reset" class="btn btn-danger mt-3">reset</button>
                <button type="submit" name="tambah" class="btn btn-primary mt-3"><i class='fas fa-save'></i>  Simpan data</button>
            </form>

        </div>
        </div>
</div>
</div>
</div>
</div>

          <div class="section"></div>
    <!-- /.content-header -->




