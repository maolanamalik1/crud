<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Data</b>Sekolah</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register for new membership</p>

      <form action="<?=base_url(); ?>Auth/register" method="post" enctype="multipart/form-data">
      <div class="form-group">
            <input type="text" placeholder="Nama" name="nama" class="form-control" id="nama" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="number" placeholder="absen" min="1" max="36" name="absen2" class="form-control" id="absen2" autocomplete="off">
          </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="email" name='email'value="<?=set_value('email');?>">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-envelope"></span> 
            </div>
          </div>
        </div>
        <div class="form-group">
        <label for="kelas">kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
            </div>
        <div class="form-group">
        <label for="kelas">kelas</label>
                <select class="form-control" name="kelas" id="kelas">
                  <option>10 RPL 1</option>
                  <option>10 RPL 2</option>
                  <option>11 RPL 1</option>
                  <option>11 RPL 2</option>
                  <option>12 RPL 1</option>
                  <option>12 RPL 2</option>
                  <option>10 TATA BOGA 1</option>
                  <option>10 TATA BOGA 2</option>
                  <option>11 TATA BOGA 1</option>
                  <option>11 TATA BOGA 2</option>
                  <option>12 TATA BOGA 1</option>
                  <option>12 TATA BOGA 2</option>
                  <option>10 TATA BUSANA 1</option>
                  <option>10 TATA BUSANA 2</option>
                  <option>11 TATA BUSANA 1</option>
                  <option>11 TATA BUSANA 2</option>
                  <option>12 TATA BUSANA 1</option>
                  <option>12 TATA BUSANA 2</option>
                  <option>10 PERHOTELAN 1</option>
                  <option>10 PERHOTELAN 2</option>
                  <option>11 PERHOTELAN 1</option>
                  <option>11 PERHOTELAN 2</option>
                  <option>12 PERHOTELAN 1</option>
                  <option>12 PERHOTELAN 2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                  <option>rekayasa perangkat lunak</option>
                  <option>tata boga</option>
                  <option>tata busana</option>
                  <option>perhotelan</option>
                </select>
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
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
            <div class="form-group">
                    <input type="text" placeholder="nis"name="nis" class="form-control" id="nis" autocomplete="off">
                </div>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name="username"value="<?=set_value('username');?>">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="passwod"value="<?=set_value('passwod');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
                <div class="form-group">
                    <label for="foto">Tambah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
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