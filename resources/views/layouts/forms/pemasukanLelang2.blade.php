@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Pemasukan</h3>
    </div>
    <div class="">
        <div class="card-body">
            <label for="example-select">Kategori </label>
              <select class="form-control" id="example-select">
                  <option value="1">awdawda</option>
                  <option value="2">awdwadwaM</option>
                  <option value="3">awdawdad</option>
              </select>
            </div>
      </div> 
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
        <label>ID Jemaat:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Lingkungan:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Tanggal:</label>
          <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>           
        </div> 
        <label>Jenis Kegiatan:</label>
        <input type="UANG" class="form-control" placeholder="Jenis Kegiatan">
        <label>Total Pemasukan:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Bentuk Pemasukan:</label>
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <input type="checkbox" >
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Transfer">
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><input type="checkbox"></span>
              </div>
              <input type="text" class="form-control" placeholder="Cash">
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <label>ID_Bank:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
      </div>   
      
      
      <div class="row">
        <div class="col-12">      
          <button type="button" class="btn btn-success float-right"> Edit
          </button>
          <button type="button" class="btn btn-warning float-right" style="margin-right: 5px;">
            Cancel
          </button>
        </div>
      </div>
      </div>

   
      </div>