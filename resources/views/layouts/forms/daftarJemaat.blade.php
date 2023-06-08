@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran Jemaat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Jemaat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="height:6rem">
                <h3 class="card-title" id="textHeader">Tambah Jemaat</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <form action="" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" placeholder="Nama Depan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control" placeholder="Nama Belakang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gelar depan</label>
                        <input type="text" class="form-control" placeholder="Gelar Depan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gelar Belakang</label>
                        <input type="text" class="form-control" placeholder="Gelar Belakang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nomor Registrasi</label>
                        <input type="text" class="form-control" placeholder="Nomor Registrasi">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" class="form-control" placeholder="Golongan Darah">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="number" class="form-control" placeholder="No Telepon">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Keluarga</label>
                        <input type="text" class="form-control" placeholder="Status Keluarga">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Pekerjaan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pekerjaan Lainnya</label>
                        <input type="text" class="form-control" placeholder="Pekerjaan Lainnya">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Bidang Pendidikan</label>
                        <input type="text" class="form-control" placeholder="Bidang Pendidikan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" class="form-control" placeholder="Pendidikan Terakhir">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Bidang Pendidikan Lainnya</label>
                        <input type="text" class="form-control" placeholder="Bidang Pendidikan Lainnya">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" placeholder="Foto">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan">
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->