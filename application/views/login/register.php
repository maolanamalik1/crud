<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Data</b>Sekolah</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register for new membership</p>

      <form action="<?=base_url(); ?>Auth/register" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name='nama'value="<?=set_value('nama');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('nama');?></small>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Nomor absen" name='absen2'value="<?=set_value('absen2');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('absen2');?></small>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="email" name='email'value="<?=set_value('email');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('email');?></small>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
                <label for="kelamin">Kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
                <small class="text-danger"><?= form_error('kelamin');?></small>
            </div>
            <div class="form-group">
                <label for="kelas">kelas</label>
                <select class="form-control" name="id_kelas" id="id_kelas">
                  <option>--Wajib diisi--</option>
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

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="alamat" name='alamat'value="<?=set_value('alamat');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('alamat');?></small>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="nis" name='nis'value="<?=set_value('nis');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('nis');?></small>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name="username"value="<?=set_value('username');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('username');?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="passwod"value="<?=set_value('passwod');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('passwod');?></small>
        <div class="form-group">
                    <label for="foto">Tambah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
        </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->