<!--jubotron-->
<div class="jumbotron jumbotron-fluid" >
  <div class="container mt-5">
    <h1 class="display-4">Selamat Datang<br>di Web Data-Sekolah</h1>
    <p class="lead"></p>
  </div>
</div>
<!--akhir jumbo-->
    <!--widget-->
    <div class="row">
      <div class="col-sm-6">
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
              <a href="<?=base_url(); ?>dataguru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <!-- /.card -->
      </div>
    </div>
