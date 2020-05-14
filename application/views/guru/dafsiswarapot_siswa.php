<div class="content-wrapper">
    <section class="content">
      <!--judul-->
      <title><?php echo $judul;?></title>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mt-3">Daftar raport Siswa</h3>
        </div>
      </div>
      <!--akhir judul-->
      <!--sarch-->
            <div class="row mt-3">
               <div class="col-md-10">
                  <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="Submit" id="button-addon2">Cari</button>
                      </div>
                    </div>
                  </form>
               </div> 
            </div>
      <!--akhir search-->
      <!--pilih kelas-->
        <div class="row mt-">
          <div class="col-md-4">
            <form action="" method="post">
              
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="pilih">
                    <option selected>-- pilih kelas --</option>
                    <option>10 RPL 1</option>
                    <option>10 RPL 2</option>
                    <option>11 RPL 1</option>
                    <option>11 RPL 2</option>
                    <option>12 RPL 1</option>
                    <option>12 RPL 2</option>
                    <option>10 TATA BOGA 1</option>
                    <option>10 TATA BOGA 2</option>
                    <option>11 TATA BOGA 1</option>
                    <option>11 TATA BOGA 2</option>
                    <option>12 TATA BOGA 1</option>
                    <option>12 TATA BOGA 2</option>
                    <option>10 TATA BUSANA 1</option>
                    <option>10 TATA BUSANA 2</option>
                    <option>11 TATA BUSANA 1</option>
                    <option>11 TATA BUSANA 2</option>
                    <option>12 TATA BUSANA 1</option>
                    <option>12 TATA BUSANA 2</option>
                    <option>10 PERHOTELAN 1</option>
                    <option>10 PERHOTELAN 2</option>
                    <option>11 PERHOTELAN 1</option>
                    <option>11 PERHOTELAN 2</option>
                    <option>12 PERHOTELAN 1</option>
                    <option>12 PERHOTELAN 2</option>
                    <option>10 USAHA PERJALANAN WISATA 1</option>
                    <option>10 USAHA PERJALANAN WISATA 2</option>
                    <option>11 USAHA PERJALANAN WISATA 1</option>
                    <option>11 USAHA PERJALANAN WISATA 2</option>
                    <option>12 USAHA PERJALANAN WISATA 1</option>
                    <option>12 USAHA PERJALANAN WISATA 2</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">pilih</button>
                  </div>
                </div>
            </from>
          </div>
        </div>
      <!--akhir pilh kelas-->
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
                          <a class="badge badge-success btn-sm" href="<?= base_url(); ?>siswaguru/raport/<?=$mhs['absen'];?>">
                          
                             Raport
                          </a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
            <!--pagination-->
            <div class="row mb-5">
            <?= $this->pagination->create_links(); ?>
            </div>
            <!--akhr-->
      <!--Akhir-table-->
          
        
    </section>
</div>