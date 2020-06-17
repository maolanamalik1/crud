<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
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
    <hr class="line-title" style="border-top: 3px solid black;">
        <ul style="margin-left: 5px;">
          <li style="display: inline; margin-left: 70px;"> Nama: </li>
          <li style="display: inline; float: right; margin-right: 150px;">kelamin: </li>
        </ul>
        <ul style="margin-top: 5px; margin-left: 10px;">
          <li style="display: inline; margin-left: 50px;">kelas:  </li>
          <li style="display: inline;float: right; margin-right: 150px;;">agama: </li>
        </ul>
        <ul style="margin-top: 5px; margin-left: 10px;">
          <li style="display: inline; margin-left: 50px;">jurusan:  </li>
          <li style="display: inline;float: right; margin-right: 150px;;">nis: </li>
        </ul>
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
         <div class="col-md-3">
                    <table class="table">
                    <tr>
                    <th>sakit:</th>
                    <td></td>
                    </tr>
                    <tr>
                    <th>alpha :</th>
                    <td></td>
                    </tr>
                    <tr>
                    <th>izin :</th>
                    <td></td>
                    </tr>
                    </table>
              </div>
         <ul style="margin-left: 10px;">
          <li style="display: inline; margin-left: 70px;">  Tanda tangan guru</li>
          <li style="display: inline; float: right; margin-right: 100px;">  Tanda tangan guru</li>
        </ul>
        <ul style="margin-top: 68px; margin-left: 10px;">
          <li style="display: inline; margin-left: 50px;"> _________________</li>
          <li style="display: inline;float: right; margin-right: 90px;;"> _________________</li>
        </ul>
         <div class="row mt-5" style="margin-left: 50px;">
         </div>
</body>
</html>