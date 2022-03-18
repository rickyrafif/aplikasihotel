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
              <form class="form-horizontal" method="post" action="<?php echo base_url('hotel/simpan') ?>">
                <div class="card-body">                
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">id_hotel</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="id_hotel" placeholder="id_hotel" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">nama_hotel</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama_hotel" placeholder="nama_hotel" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">alamat_jalan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="alamat_jalan" placeholder="alamat_jalan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kabupaten</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="kabupaten" placeholder="kabupaten" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">provinsi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="provinsi" placeholder="provinsi" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">telepon</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="telepon" placeholder="telepon" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" placeholder="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">website</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="website" placeholder="website" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kota</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="kota" placeholder="kota" required>
                    </div>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->