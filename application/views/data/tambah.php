

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">tambah data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">tambah data</li>
            </ol>
          </div><!-- /.col -->
          <div class="container">
          <div class="row">
        <div class="col -md-11">
            <div class="col-md-11">
                    <div class="card">
        <div class="card-body">
          <?php if (validation_errors() ) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
                </div>
            <div class="form-group">
                    <label for="absen2">Absen</label>
                    <input type="number" min="1" max="36" name="absen2" class="form-control" id="absen2" autocomplete="off">
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" autocomplete="off">
                </div>
            <div class="form-group">
                <label for="kelamin">Kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>

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
                    <label for="nis">nis</label>
                    <input type="text" name="nis" class="form-control" id="nis">
                </div>
                <div class="form-group">
                    <label for="foto">Tambah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <button type="reset" class="btn btn-danger">reset</button>
                <button type="submit" name="tambah" class="btn btn-primary"><i class='fas fa-save'></i>  Simpan data</button>
            </form>

        </div>
        </div>
</div>
</div>
</div>
</div>

          <div class="section"></div>
    <!-- /.content-header -->




