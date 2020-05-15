<div class="container-fluid">
        <!--Judul-->
        <title><?php echo $judul;?></title>
          <div class="row">
            <div class="col-md-12">
                <h3 class="mt-3">Dashbord</h3>
            </div>
          </div>
    <!--Akhir Judul-->
    <!--jumbotron-->
          <div class="row">
            <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Selamat datang<br>di web data sekolah</h1>
                <p class="lead"> </p>
              </div>
            </div>
            </div>
          </div>
    <!--akhir jumbotron-->
    <!--widget-->
    <div class="row">
      <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_siswa ?></h3>

                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?=base_url(); ?>user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!---->
      </div>
      <!---->
      <div class="col-md-6">
       <!-- small box -->
       <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_guru ?></h3>

                <p>Data Guru</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?=base_url(); ?>userguru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <!-- /.card -->
    </div>
    <!--widget-->
  </div>
        <!--table-->
        <div class="row">
        <div class="col-md-11">
            <table class="table table-bordered mt-2 mb-5">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Absen</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nilai p</th>
                  <th scope="col">kkm p</th>
                  <th scope="col">nilai k</th>
                  <th scope="col">kkm k</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $mhs['absen2'] ?></th>
                  <td><?= $mhs['nama'] ?></td>
                  <td><?= $mhs['ma_pel'] ?></td>
                  <td><?= $mhs['n_p'] ?></td>
                  <td><?= $mhs['kkm_p'] ?></td>
                  <td><?= $mhs['n_k'] ?></td>
                  <td><?= $mhs['kkm_k'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>


  
</div>
