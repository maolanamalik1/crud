<div class="content-wrapper">
    <section class="content">
    <!--judul-->
    <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12 mt-2">
            <h3 class="mt-3">Daftar siswa kelas 12 RPL 2</h3>
        </div>
      </div>
      <!--akhir judul-->
            <!--table-->
    <div class="row">
        <div class="col-md-11 mt-3">
            <table class="table table-bordered mt-2 mb-5">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Absen</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $mhs['absen'] ?></th>
                  <th><?= $mhs['absen2'] ?></th>
                  <td><img src="<?=base_url(); ?>assets/foto/<?= $mhs['foto']; ?>" width="40" height="60"></td>
                  <td><?= $mhs['nama'] ?></td>
                  <td><?= $mhs['kelas'] ?></td>
                    <td>
                          <a class="badge badge-success btn-sm" href="<?= base_url(); ?>datasiswa/view/<?=$mhs['absen'];?>">
                          
                              View
                          </a>
                          <a class="badge badge-warning btn-sm" href="<?= base_url(); ?>datasiswa/edit/<?=$mhs['absen'];?>">
                          
                             edit
                          </a>
                          <a class="badge badge-primary btn-sm" href="<?= base_url(); ?>datasiswa/editscore/<?=$mhs['absen'];?>">
                          
                             edit Score
                          </a>
                          <a class="badge badge-danger btn-sm" href="<?= base_url(); ?>datasiswa/hapus/<?= $mhs['absen']; ?>" onclick="return confirm('Anda yakin?');">
                              
                              </i>
                              Delete
                          </a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!--akhir tabel-->
    </section>
</div>