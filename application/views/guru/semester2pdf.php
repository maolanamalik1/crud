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
                Nilai ulangan semester 2
                    <br>SMK 24 Jakarta
                </span>
            </td>
        </tr>
    </table>
    <hr class="line-title" style="border-top: 3px solid black;">
    <?php 
                  $no = 1;
                  foreach( $iip as $mhs ) : ?>
        <ul style="margin-left: 5px;">
          <li style="display: inline; margin-left: 70px;"> Nama: <?= $mhs['nama'] ?></li>
          <li style="display: inline; float: right; margin-right: 100px;">kelamin: <?= $mhs['kelamin'] ?></li>
        </ul>
        <ul style="margin-top: 5px; margin-left: 10px;">
          <li style="display: inline; margin-left: 50px;">kelas:  <?= $mhs['nama_kelas'] ?></li>
          <li style="display: inline;float: right; margin-right: 100px;;">agama: <?= $mhs['agama'] ?></li>
        </ul>
        <ul style="margin-top: 5px; margin-left: 10px;">
          <li style="display: inline; margin-left: 50px;">jurusan:  <?= $mhs['nama_jurusan'] ?></li>
          <li style="display: inline;float: right; margin-right: 100px;;">nis: <?= $mhs['nis'] ?></li>
        </ul>
        <?php endforeach; ?>
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