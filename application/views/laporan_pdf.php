<!Doctype html>
<html><head>
    <title></title>
</head><body>
    

    <table>
    <tr>
    <th>No</th>
    <th>Absen</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Kelamin</th>
    <th>Jurusan</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Nis</th>
    <th>Action</th>
    </tr>

    <?php
    $no = 1;
    foreach( $oop as $mhs ) : ?>
      <tr>
      <td><?php echo $no++ ?></td>
      <td><?= $mhs['absen'] ?></td>
      <td><?= $mhs['nama'] ?></td>
      <td><?= $mhs['email'] ?></td>
      <td><?= $mhs['kelamin'] ?></td>
      <td><?= $mhs['jurusan'] ?></td>
      <td><?= $mhs['agama'] ?></td>
      <td><?= $mhs['alamat'] ?></td>
      <td><?= $mhs['nis'] ?></td>

    </tr>
    <?php endforeach; ?>
    </table>
</body></html>