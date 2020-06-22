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
                    Nilai ulangan siswa siswi
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
                  <th>Semester</th>
                  <th>Mapel</th>
                  <th>uh1</th>
                  <th>uh2</th>
                  <th>uh3</th>
                  <th>uh4</th>
                  <th>uh5</th>
                  <th>PTS</th>
                  <th>PAS</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                <th><?= $no++ ?></th>
                <td><?= $mhs['semester'] ?></td>
                  <td><?= $mhs['mat_pel'] ?></td>
                  <td><?= $mhs['uh1'] ?></td>
                  <td><?= $mhs['uh2'] ?></td>
                  <td><?= $mhs['uh3'] ?></td>
                  <td><?= $mhs['uh4'] ?></td>
                  <td><?= $mhs['uh5'] ?></td>
                  <td><?= $mhs['pts'] ?></td>
                  <td><?= $mhs['pas'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
         </table>
      
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