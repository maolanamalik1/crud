<div class="content-wrapper">
    <section class="content">
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
    <div class="row mt-2">
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
              <a href="<?=base_url(); ?>datasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
    <!--widget-->
    </section>
</div>