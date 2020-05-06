

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""></a></li>
              <li class="breadcrumb-item active">ubah data</li>
            </ol>
          </div><!-- /.col -->
          <div class="container">
          <div class="row">
        <div class="col -md-11">
            <div class="col-md-11">
                    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<? $oop['id'];?>">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $oop['nama']; ?>">
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $oop['email']; ?>">
                </div>
                <div class="form-group">
                <label for="kelamin">jenis kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <?php foreach( $kelamin as $k ): ?>
                    <?php if($k == $oop['kelamin']):?>
                      <option value="<?= $k; ?>"selected><?= $k; ?></option>
                      <?php else : ?>
                        <option value="<?= $k; ?>"><?= $k; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
            <div class="form-group">
                    <label for="gelar">gelar</label>
                    <input type="text" name="gelar" class="form-control" id="gelar" value="<?= $oop['gelar']; ?>">
                </div>
                <div class="form-group">
                <label for="agama">agama</label>
                <select class="form-control" name="agama" id="agama">
                  <?php foreach( $agama as $a ): ?>
                    <?php if($a == $oop['agama']):?>
                      <option value="<?= $a; ?>"selected><?= $a; ?></option>
                      <?php else : ?>
                        <option value="<?= $a; ?>"><?= $a; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
                <div class="form-group">
                <label for="ngajar">Mengajar pelajaran</label>
                <select class="form-control" name="ngajar" id="kelas">
                  <?php foreach( $Mapel as $m ): ?>
                    <?php if($m == $oop['ngajar']):?>
                      <option value="<?= $m; ?>"selected><?= $m; ?></option>
                      <?php else : ?>
                        <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
            <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $oop['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="username">Usernama</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= $oop['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="passwod">password</label>
                    <input type="text" name="passwod" class="form-control" id="passwod" value="<?= $oop['passwod']; ?>">
                </div>
                <div class="form-group">
                    <label for="foto">ubah foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>

                <button type="submit" name="ubah" class="btn btn-primary"><i class='fas fa-save'></i>  Simpan perubahan</button>
            </form>

        </div>
        </div>
</div>
</div>
</div>
</div>

          <div class="section"></div>
    <!-- /.content-header -->




