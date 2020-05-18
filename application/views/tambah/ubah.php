

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ubah data</h1>
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
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $oop['nama']; ?>">
                </div>
            <div class="form-group">
                    <label for="absen2">Absen</label>
                    <input type="number" min="1" max="36" name="absen2" class="form-control" id="absen2" value="<?= $oop['absen2']; ?>">
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
                <label for="kelas">kelas</label>
                <select class="form-control" name="kelas" id="kelas">
                  <?php foreach( $kelas as $k ): ?>
                    <?php if($k == $oop['jurusan']):?>
                      <option value="<?= $k; ?>"selected><?= $k; ?></option>
                      <?php else : ?>
                        <option value="<?= $k; ?>"><?= $k; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
                <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                  <?php foreach( $jurusan as $j ): ?>
                    <?php if($j == $oop['jurusan']):?>
                      <option value="<?= $j; ?>"selected><?= $j; ?></option>
                      <?php else : ?>
                        <option value="<?= $j; ?>"><?= $j; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
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
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $oop['alamat']; ?></textarea>
                </div>
            <div class="form-group">
                    <label for="nis">nis</label>
                    <input type="text" name="nis"class="form-control" id="nis" value="<?= $oop['nis']; ?>">
                </div>
            <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username"class="form-control" id="username" value="<?= $oop['username']; ?>">
                </div>
            <div class="form-group">
                    <label for="passwod">password</label>
                    <input type="text" name="passwod"class="form-control" id="passwod" value="<?= $oop['passwod']; ?>">
                </div>
                <div class="form-group">
                    <label for="foto">ubah foto</label>
                    <input type="hidden" name="filelama" class="form-control" id="filelama" value="<?= $oop['foto']; ?>">
                    <?php
                      if (isset($oop->foto))
                        {
                          echo'<input type="hidden" name="old_pict" value="'.$oop->foto.'">';
                          echo'<img src"'.base_url().'assets/foto/'.$oop->foto.'" width="30%">';
                        }
                        ?>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <button type="submit" name="ubah" class="btn btn-primary"><i class='fas fa-save'></i>  Simpan data</button>
            </form>

        </div>
        </div>
</div>
</div>
</div>
</div>

          <div class="section"></div>
    <!-- /.content-header -->




