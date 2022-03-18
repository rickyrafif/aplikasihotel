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
                        <th>ID hotel</th>
                        <th>nama hotel</th>
                        <th>alamat jalan</th>
                        <th>kabupaten</th>
                        <th>provinsi</th>
                        <th>telepon</th>
                        <th>email</th>
                        <th>website</th>
                        <th>kota</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=0;
                        foreach ($hotel->result() as $value):
                            $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $value->id_hotel; ?></td>
                        <td><?php echo $value->nama_hotel; ?></td>
                        <td><?php echo $value->alamat_jalan; ?></td>
                        <td><?php echo $value->kabupaten; ?></td>
                        <td><?php echo $value->provinsi; ?></td>
                        <td><?php echo $value->telepon; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->website; ?></td>
                        <td><?php echo $value->kota; ?></td>
                        <td>
                        <a href=" <?php echo base_url('hotel/hapus/').$value->id_hotel ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                        <?php 
                        endforeach;
                        ?>
                    </tbody>
                </table> 
              </div>
              <div class="card-footer clearfix">
                <a href=" <?php echo base_url('hotel/tambah') ?> " class="btn btn-xs btn-primary">Tambah Data</a>
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