<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
            <h4><strong>detail dataguru</strong></h4>
            <table class="table">
            <tr>
            <th>ID :</th>
            <td><?= $oop['id'];?></td>
            </tr>
            <tr>
            <th>nama lengkap guru :</th>
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
            <th>gelar :</th>
            <td><?= $oop['gelar'];?></td>
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
            <th>Foto :</th>
            <td><img src="<?=base_url(); ?>assets/foto/<?= $oop['foto']; ?>" width="80" height="110"></td>
            </tr>
            <tr>
            <th>username :</th>
            <td><?= $oop['username'];?></td>
            </tr>
            <tr>
            <th>password :</th>
            <td><?= $oop['passwod'];?></td>
            </tr>
            </table>
    </section>
</div>
    </div>
    <!-- /.content-header -->