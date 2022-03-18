<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID reservasi</th>
                        <th>id tamu</th>
                        <th>check_in</th>
                        <th>check_out</th>
                        <th>biaya</th>
                        <th>time in</th>
                        <th>time out</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=0;
                        foreach ($reservasi->result() as $value):
                            $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $value->id_reservasi; ?></td>
                        <td><?php echo $value->id_tamu; ?></td>
                        <td><?php echo $value->check_in; ?></td>
                        <td><?php echo $value->check_out; ?></td>
                        <td><?php echo $value->biaya; ?></td>
                        <td><?php echo $value->time_in; ?></td>
                        <td><?php echo $value->time_out; ?></td>
                        <td>
                        <a href=" <?php echo base_url('reservasi/ubah/').$value->id_reservasi ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href=" <?php echo base_url('reservasi/hapus/').$value->id_reservasi ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                        <?php 
                        endforeach;
                        ?>
                    </tbody>
                </table> 
              </div>
              <div class="card-footer clearfix">
                <a href=" <?php echo base_url('reservasi/tambah') ?> " class="btn btn-xs btn-primary">Tambah Data</a>
            </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->