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
                    <table class="table">
                    <tr>
                    <th>Absen :</th>
                    <td><?= $oop['absen2'];?></td>
                    </tr>
                    <tr>
                    <th>Nama Lengkap Siswa :</th>
                    <td><?= $oop['nama'];?></td>
                    </tr>
                    <tr>
                    <th>Email :</th>
                    <td><?= $oop['email'];?></td>
                    </tr>
                    <tr>
                    <th>Kelamin :</th>
                    <td><?= $oop['kelamin'];?></td>
                    </tr>
                    <tr>
                    <th>Jurusan :</th>
                    <td><?= $oop['jurusan'];?></td>
                    </tr>
                    <tr>
                    <th>Agama :</th>
                    <td><?= $oop['agama'];?></td>
                    </tr>
                    <tr>
                    <th>Alamat :</th>
                    <td><?= $oop['alamat'];?></td>
                    </tr>
                    <tr>
                    <th>Nis :</th>
                    <td><?= $oop['nis'];?></td>
                    </tr>
                    <tr>
                    <th>Foto :</th>
                    <td><img src="<?=base_url(); ?>assets/foto/<?= $oop['foto']; ?>" width="80" height="110"></td>
                    </tr>
                    <tr>
                    <th>username :</th>
                    <td><?= $oop['username']; ?></td>
                    </tr>
                    <tr>
                    <th>password:</th>
                    <td><?= $oop['passwod']; ?></td>
                    </tr>
                    
                    </tabel>
                <div>
            </div>
            <!---->
    </section>
</div>
    <!-- /.content-header -->
