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
            <div class="jumbotron jumbotron">
              <div class="container">
                <h1 class="display-4">Selamat datang<br>di web data sekolah</h1>
                <p class="lead"> </p>
              </div>
            </div>
            </div>
          </div>
    <!--akhir jumbotron-->
    <!--widget-->
    <div class="row mb-4">
      <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Profile</h3>

                <p>Siswa</p>
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
                <h3>Nilai</h3>

                <p>siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?=base_url(); ?>user/nilai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <!-- /.card -->
    </div>
    <!--widget-->
  </div>


</div>
