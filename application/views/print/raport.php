<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .line-title{
            border: 0;
            border-style: insert;
            border-top: 3px solid #000;
        }
    </style>
</head>
<body>
    <table style="width: 100%;">
        <tr>
            <td align ="center">
                <span style="line-height:1.6;font-weight:bold;font-size:26px;">
                    Raport siswa
                    <br>SMK 24 Jakarta
                </span>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <div class="row">
    <?php 
                  $no = 1;
                  foreach( $iip as $mhs ) : ?>
              <div class="col-md-6 ml-5">
              <h5>
              Nama:  <?= $mhs['nama'] ?>
              <br>
              Kelas:  <?= $mhs['nama_kelas'] ?>
              <br>
              Jurusan:  <?= $mhs['nama_jurusan'] ?>
              </h5>
              </div>
              <div class="col-md-4">
              <h5>
              Kelamin:   <?= $mhs['kelamin'] ?>
              <br>
              Agama:  <?= $mhs['agama'] ?>
              <br>
              Nis:  <?= $mhs['nis'] ?>
              </h5>
              </div>
              <?php endforeach; ?>
        </div>
    <table class="table table-bordered mt-3">
              <thead class="">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mata pelajaran</th>
                  <th scope="col">Nilai pengetahuan</th>
                  <th scope="col">kkm</th>
                  <th scope="col">Nilai keterampilan</th>
                  <th scope="col">kkm</th>
                  <th scope="col">keterangan</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                <th><?= $no++ ?></th>
                  <td><?= $mhs['ma_pel'] ?></td>
                  <td><?= $mhs['n_p'] ?></td>
                  <td><?= $mhs['kkm_p'] ?></td>
                  <td><?= $mhs['n_k'] ?></td>
                  <td><?= $mhs['kkm_k'] ?></td>
                  <td><?= $mhs['ket'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
         </table>
         <div class="row mt-5" style="margin-left: 50px;">
              <div class="col-md-3">
              </div>
              <div class="col-md-5">
              </div>
              <div class="col-md-4">
                    <table class="table">
                    <tr>
                    <th>sakit:</th>
                    <td><?= $skt ?></td>
                    </tr>
                    <tr>
                    <th>alpha :</th>
                    <td><?= $alpha ?></td>
                    </tr>
                    <tr>
                    <th>izin :</th>
                    <td><?= $izin ?></td>
                    </tr>
                    </table>
              </div>
              </div>
         </div>
         <div class="row mt-5" style="margin-left: 50px;">
              <div class="col-md-3">
              <h5 style="margin-left: 50px;">TTD GURU</h5>
              <div class="line" style="margin-top: 90px;border-top: 3px solid black;">
              </div>
              </div>
              <div class="col-md-5">
              </div>
              <div class="col-md-3">
              <h5 style="margin-left: 40px;">TTD ORANG TUA</h5>
              <div class="line" style="margin-top: 90px;border-top: 3px solid black;">
              </div>
              </div>
         </div>

         <script type="text/javascript">
        window.print();
        </script>
</body>
</html>