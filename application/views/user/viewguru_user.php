<div class="container">
  <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Detail guru</h3>
        </div>
      </div>
      <!--tabel-->
      <div class="row">
    <div class="col-sm-12 mt-3 mb-5">
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
            <td><img src="<?=base_url(); ?>assets/foto/<?= $oop['foto']; ?>" width="90" height="110"></td>
            </tr>
            </table>
    </div>
  </div>
      <!--akhir tabel-->
</div>