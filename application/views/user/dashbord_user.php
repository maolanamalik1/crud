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
            <div class="col-md-12 b-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?=base_url(); ?>assets/foto/p1.jpg"width="200" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Selamat datang di website<br>Data siswa</h5>
                <p></p>
              </div>
              </div>
              <div class="carousel-item">
                <img src="<?=base_url(); ?>assets/foto/p3.jpg"width="200" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Selamat datang di website<br>Data siswa</h5>
                <p></p>
              </div>
              </div>
              <div class="carousel-item">
              <img src="<?=base_url(); ?>assets/foto/p2.png"width="200" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Selamat datang di website<br>Data siswa</h5>
                <p></p>
              </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
            </div>
          </div>
    <!--akhir jumbotron-->
    <!--widget-->
    <div class="row mb-4 mt-2">
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
              <i class='fas fa-chart-line'></i>
              </div>
              <a href="<?=base_url(); ?>user/nilai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <!-- /.card -->
    </div>
    <!--widget-->
  </div>
<div class="row">
  <div class="col-md-4">
  <div class="info-box">
              <span class="info-box-icon bg-info"><i class='fas fa-clinic-medical'></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sakit</span>
                <span class="info-box-number"><?= $skt ?></span>
              </div>
          </div>
          </div>
  <div class="col-md-4">
  <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Izin</span>
                <span class="info-box-number"><?= $izin ?></span>
              </div>
          </div>
          </div>
  <div class="col-md-4">
  <div class="info-box">
              <span class="info-box-icon bg-danger"><i class='fas fa-exclamation-circle'></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Alpha</span>
                <span class="info-box-number"><?= $alpha ?></span>
              </div>
          </div>
          </div>
      </div>

</div>
