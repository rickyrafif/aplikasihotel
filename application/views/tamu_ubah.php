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
              <?php foreach ($tamu->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('tamu/update') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID tamu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $value->id_tamu; ?>" disabled>
                            <input type="hidden" class="form-control" name="id_tamu" value="<?php echo $value->id_tamu; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">nik</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nik" value="<?php echo $value->nik; ?>" disabled>
                            <input type="hidden" class="form-control" name="nik" value="<?php echo $value->nik; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">nama lengkap</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="nama_lengkap" placeholder="nama_lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">tipe identitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tipe_identitas" value="<?php echo $value->tipe_identitas; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">kewarganegaraan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kewarganegaraan" value="<?php echo $value->kewarganegaraan; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $value->alamat; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">provinsi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="provinsi" value="<?php echo $value->provinsi; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">no_telp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="no_telp" value="<?php echo $value->no_telp; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="<?php echo $value->email; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
            </form>
            <?php endforeach; ?>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->