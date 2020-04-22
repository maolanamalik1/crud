<div class="content-wrapper">
    <section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
            <div class="card-header">
            <a href="<?=base_url(); ?>dataguru/tambah" class="btn btn-primary">+ Tambah Data Guru</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>id</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  foreach( $oop as $mhs ) : ?>
                    <tr>
                    <td><?= $mhs['id'] ?></td>
                    <td><img src="<?=base_url(); ?>assets/foto/<?= $mhs['foto']; ?>" width="40" height="60"></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td>
                          <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>userguru/view/<?= $mhs['id']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                              </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </section>
</div>