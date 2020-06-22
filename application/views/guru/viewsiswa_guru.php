<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-2">
                <h3><strong>detail datasiswa</strong></h3>
            <div>
        </div>
        <!---->
            <div class="row mt-3">
                <div class="col-md-12 mt-3">
                <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                    <table class="table">
                    <tr>
                    <th>Absen :</th>
                    <td><?= $mhs['absen2'];?></td>
                    </tr>
                    <tr>
                    <th>Nama Lengkap Siswa :</th>
                    <td><?= $mhs['nama'];?></td>
                    </tr>
                    <tr>
                    <th>Email :</th>
                    <td><?= $mhs['email'];?></td>
                    </tr>
                    <tr>
                    <th>Kelamin :</th>
                    <td><?= $mhs['kelamin'];?></td>
                    </tr>
                    <tr>
                    <th>kelas :</th>
                    <td><?= $mhs['nama_kelas'];?></td>
                    </tr>
                    <tr>
                    <tr>
                    <th>Jurusan :</th>
                    <td><?= $mhs['nama_jurusan'];?></td>
                    </tr>
                    <tr>
                    <th>Agama :</th>
                    <td><?= $mhs['agama'];?></td>
                    </tr>
                    <tr>
                    <th>Alamat :</th>
                    <td><?= $mhs['alamat'];?></td>
                    </tr>
                    <tr>
                    <th>Nis :</th>
                    <td><?= $mhs['nis'];?></td>
                    </tr>
                    <tr>
                    <th>Foto :</th>
                    <td><img src="<?=base_url(); ?>assets/foto/<?= $mhs['foto']; ?>" width="80" height="110"></td>
                    </tr>
                    <?php endforeach; ?>
                    </tabel>
                <div>
            </div>
            <!---->
            <a href="<?= base_url(); ?>siswaguru" class="btn btn-success mb-2"><-Kembali</a>
    </section>
</div>
    <!-- /.content-header -->
