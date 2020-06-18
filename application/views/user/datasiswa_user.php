<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Profile Siswa</h3>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline mt-4">
              <div class="card-body box-profile">

                <div class="text-center">
                <?php foreach($detail as $data){?>
                        <img src="<?= base_url();?>assets/foto/<?= $data->foto;?>" width="160" height="250" alt="User profile picture">
                
                        <h3 class="text-muted text-center mt-3"><?php echo $this->session->userdata('nama'); ?></h3>
                 <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>kelas :</b> <a><?= $data->nama_kelas;?></a>
                  </li>
                 </ul>
                <?php }?>
                </div>

              </div>
          </div>
          </div>
          <!----->
          <!--keter-->
          <div class="col-sm-9">
              <div class="card card-primary">
                <div class="card-header p-2">
                    <div class="row">
                        <div class="col-sm-10">
                        <h3> Profil</h3>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                       <br>
                            <!--isi-->
                                    <?php foreach( $detail as $mhs ) : ?>
                                        <strong>Absen :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->absen2;?>
                                        </p>
                                        <hr>
                                        <strong>Nis :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->nis;?>
                                        </p>
                                        <hr>
                                        <strong>Jurusan :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->nama_jurusan;?>
                                        </p>
                                        <hr>
                                        <strong>Agama :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->agama;?>
                                        </p>
                                        <hr>
                                        <strong>Kelamin :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->kelamin;?>
                                        </p>
                                        <hr>
                                        <strong>Email :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->email;?>
                                        </p>
                                        <hr>
                                        <strong>Alamat :</strong>
                                        <p class="text-muted">
                                        <?= $mhs->alamat;?>
                                        </p>
                                        <hr>
                                    <?php endforeach; ?>
                            <!--isi-->
                    </div>
              </div>
          </div>
        <!--keter-->
       </div>
       <!---->
      
  
</div>

