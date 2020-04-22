<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-2">
                <h3><strong>detail datasiswa</strong></h3>
            <div>
        </div>
        <!---->
            <div class="row mt-3">
                <div class="col-md-12 mt-3">
                    <table class="table">
                    <tr>
                    <th>Absen :</th>
                    <td><?= $oop['absen2'];?></td>
                    </tr>
                    <tr>
                    <th>Nama Lengkap Siswa :</th>
                    <td><?= $oop['nama'];?></td>
                    </tr>
                    <tr>
                    <th>Email :</th>
                    <td><?= $oop['email'];?></td>
                    </tr>
                    <tr>
                    <th>Kelamin :</th>
                    <td><?= $oop['kelamin'];?></td>
                    </tr>
                    <tr>
                    <th>Jurusan :</th>
                    <td><?= $oop['jurusan'];?></td>
                    </tr>
                    <tr>
                    <th>Agama :</th>
                    <td><?= $oop['agama'];?></td>
                    </tr>
                    <tr>
                    <th>Alamat :</th>
                    <td><?= $oop['alamat'];?></td>
                    </tr>
                    <tr>
                    <th>Nis :</th>
                    <td><?= $oop['nis'];?></td>
                    </tr>
                    <tr>
                    <th>Foto :</th>
                    <td><img src="<?=base_url(); ?>assets/foto/<?= $oop['foto']; ?>" width="80" height="110"></td>
                    </tr>
                    <tr>
                <th>Score :</th>
                <td>
                <a class="btn btn-warning mt-2" href="<?= base_url(); ?>datasiswa/print/<?=$oop['absen'];?>" role="button">print score</a>
                <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0;}
                    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                    </style>
                    <table class="tg mt-3">
                    <tr>
                        <th class="tg-0pky" colspan="2" rowspan="2">No</th>
                        <th class="tg-0pky" colspan="9" rowspan="2">Nama mata pelajaran</th>
                        <th class="tg-0pky" colspan="10">pengetauan</th>
                        <th class="tg-0pky" colspan="10">keterampilan</th>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="5">kkm</td>
                        <td class="tg-0pky" colspan="5">angka</td>
                        <td class="tg-0pky" colspan="5">kkm</td>
                        <td class="tg-0pky" colspan="5">angka</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="31">Kelompok A(wajib)</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">1</td>
                        <td class="tg-0pky" colspan="9">pendidikan agama</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_islam'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_islam'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">2</td>
                        <td class="tg-0pky" colspan="9">pendidikan pancasila</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_panca'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_panca'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">3</td>
                        <td class="tg-0pky" colspan="9">B indonesia</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_indo'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_indo'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">4</td>
                        <td class="tg-0pky" colspan="9">Matematika</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_mtk'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_mtk'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">5</td>
                        <td class="tg-0pky" colspan="9">B.inggris</td>
                        <td class="tg-0pky" colspan="5">70</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_inggris'];?></td>
                        <td class="tg-0pky" colspan="5">70</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_inggris'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">6</td>
                        <td class="tg-0pky" colspan="9">Sejarah</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_sejarah'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_sejarah'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="31">Kelompok B (wajib)</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">1<br></td>
                        <td class="tg-0pky" colspan="9">Seni budaya</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_seni'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_seni'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">2</td>
                        <td class="tg-0pky" colspan="9">PenJas</td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_penjas'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_penjas'];?></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="31">Kelompok Bidang keahlian</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="2">1</td>
                        <td class="tg-0pky" colspan="9">Nilai Bidang Keahlian<br></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['n_ahli'];?></td>
                        <td class="tg-0pky" colspan="5">75</td>
                        <td class="tg-0pky" colspan="5"><?= $oop['k_ahli'];?></td>
                    </tr>
                    </table>
                </td>
            </tr>
                    </tabel>
                <div>
            </div>
            <!---->

    </section>
</div>
    <!-- /.content-header -->
