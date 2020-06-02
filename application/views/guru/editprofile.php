

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">edit data profile</h1>
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
        <?php foreach( $detail as $mhs ) : ?>
            <input type="hidden" name="id" value="<?= $mhs->id;?>">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mhs->nama;?>">
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $mhs->email;?>">
                </div>
                <div class="form-group">
                <label for="kelamin">jenis kelamin</label>
                <select class="form-control" name="kelamin" id="kelamin">
                  <?php foreach( $kelamin as $k ): ?>
                    <?php if($k == $mhs->kelamin):?>
                      <option value="<?= $k; ?>"selected><?= $k; ?></option>
                      <?php else : ?>
                        <option value="<?= $k; ?>"><?= $k; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
            <div class="form-group">
                    <label for="gelar">gelar</label>
                    <input type="text" name="gelar" class="form-control" id="gelar" value="<?= $mhs->gelar;?>">
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
                    <?php if($m ==  $mhs->mapel):?>
                      <option value="<?= $m; ?>"selected><?= $m; ?></option>
                      <?php else : ?>
                        <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                </select>
              </div>
            <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $mhs->alamat;?></textarea>
                </div>
                <div class="form-group">
                    <label for="username">Usernama</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= $mhs->username;?>">
                </div>
                <div class="form-group">
                    <label for="passwod">password</label>
                    <input type="text" name="passwod" class="form-control" id="passwod" value="<?= $mhs->passwod;?>">
                </div>
                <div class="form-group">
                    <label for="foto">ubah foto</label>
                    <input type="hidden" name="filelama" class="form-control" id="filelama" value="<?= $mhs->foto;?>">
                    <?php
                      if (isset($oop->foto))
                        {
                          echo'<input type="hidden" name="old_pict" value="'.$oop->foto.'">';
                          echo'<img src"'.base_url().'assets/foto/'.$oop->foto.'" width="30%">';
                        }
                        ?>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>

                <?php endforeach; ?>
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




