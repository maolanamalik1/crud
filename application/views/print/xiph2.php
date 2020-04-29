<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .line-title{
            border: 0;
            border-style: insert;
            border-top: 1px solid #000;
        }
    </style>
</head>
<body>
    <table style="width: 100%;">
        <tr>
            <td align ="center">
                <span style="line-height:1.6;font-weight:bold;">
                    Daftar Absen Kelas XI Perhotelan 2
                    <hr>SMK 24 Jakarta
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <table class="table table-bordered ">
              <thead class="">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nis</th>
                  <th scope="col"></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                <tr>
                  <th><?= $mhs['absen'] ?></th>
                  <th><?= $mhs['nama'] ?></th>
                  <td><?= $mhs['nis'] ?></td>
                  <td></td>
                  <td></td>

                </tr>
                <?php endforeach; ?>
              </tbody>
         </table>

         <script type="text/javascript">
        window.print();
        </script>
</body>
</html>