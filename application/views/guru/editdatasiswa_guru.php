

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark mb-2">ubah data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="container-fluid">
          <div class="row">
        <div class="col-md-12 mt-2">
          <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $oop['nama']; ?>">
                    <small class="text-danger"><?= form_error('nama');?></small>
                </div>
            <div class="form-group">
                    <label for="absen2">Absen</label>
                    <input type="number" min="1" max="36" name="absen2" class="form-control" id="absen2" value="<?= $oop['absen2']; ?>">
                    <small class="text-danger"><?= form_error('absen2');?></small>
                </div>
            <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $oop['email']; ?>">
                    <small class="text-danger"><?= form_error('email');?></small>
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
                    <small class="text-danger"><?= form_error('kelamin');?></small>
                </select>
              </div>
                <div class="form-group">
                <label for="id_kelas">kelas</label>
                <select class="form-control" name="id_kelas" id="id_kelas">
                  <?php foreach( $kel as $k ): ?>
                    <?php if($k['id'] == $oop['id_kelas']):?>
                      <option value="<?= $k['id']; ?>"selected><?= $k['nama_kelas']; ?></option>
                      <?php else : ?>
                        <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                    <?php endif;?>
                    <?php endforeach; ?>
                    <small class="text-danger"><?= form_error('id_kelas');?></small>
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
                    <small class="text-danger"><?= form_error('agama');?></small>
                </select>
              </div>
            <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $oop['alamat']; ?></textarea>
                    <small class="text-danger"><?= form_error('alamat');?></small>
                </div>
            <div class="form-group">
                    <label for="nis">nis</label>
                    <input type="text" name="nis"class="form-control" id="nis" value="<?= $oop['nis']; ?>">
                    <small class="text-danger"><?= form_error('nis');?></small>
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




