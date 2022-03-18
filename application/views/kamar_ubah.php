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
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <?php foreach ($kamar->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('kamar/update') ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id kamar</label>
                    <div class="col-sm-8">
                    <input type="number" class="form-control" name='id_kamar' value="<?php echo $value->id_kamar; ?>">
                    <input type="hidden" class="form-control" name="id_kamar" value="<?php echo $value->id_kamar; ?>">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id kamar Tipe</label>
                    <div class="col-sm-8">
                    <input type="number" class="form-control" name="id_kamar_tipe" value="<?php echo $value->id_kamar_tipe; ?>">
                      <input type="hidden" class="form-control" name="id_kamar_tipe" value="<?php echo $value->id_kamar_tipe; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor kamar</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="nomor_kamar" placeholder="nomor_kamar" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Max Dewasa</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="max_dewasa" placeholder="max_dewasa" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Max Anak</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="max_anak" placeholder="max_anak" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Status Kamar</label>
                      <select class="form-control" style="width: 20%;" name="status_kamar" required>
                        <option value="Not Set" selected>- Pilih -</option>
                        <option value="kosong">Kosong</option>
                        <option value="terisi">Terisi</option>
                    </select>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->