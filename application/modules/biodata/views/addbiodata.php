<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Welcome <?php echo $this->session->userdata('username1'); ?></h4>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
        if ($this->session->flashdata('Msg')) {
                        # code...
          echo 
          '
          <div class="alert alert-success" role="alert">
          '.$this->session->flashdata("Msg").'
          </div>
          ';
        } 
        ?>
        
        <div class="ml-auto text-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active" aria-current="page">Biodata</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
   <!-- ============================================================== -->
   <!-- Start Page Content -->
   <!-- ============================================================== -->
   <div class="row">
    <div class="col-12">
      <div class="card">
        <?php echo form_open('biodata/addbiodata');?>
        <div class="card-body">
          <div class="form-group row">
            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
              NISN
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nisn" name="nisn">
            </div>

            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
              Nama
            </label>
            <div class="col-sm-5">
             <input type="text" class="form-control" placeholder="Nama" autocomplete="off" name="nama">
           </div>

         </div>
         <!-- end -->

         <div class="form-group row">
          <label for="fid" class="col-sm-1 text-right control-label col-form-label">
           Jenis Kelamin
         </label>
         <div class="col-sm-4">
           <select name="jekel" id="jekel" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <label for="fid" class="col-sm-1 text-right control-label col-form-label">
          TTL
        </label>
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="Tempat" autocomplete="off" name="tempat">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" autocomplete="off" name="tgl" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
        </div>

      </div>
      <!-- end -->



      <div class="form-group row">


      </div>
      <!-- end -->

      <div class="form-group row">

        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
          Saudara Kandung
        </label>
        <div class="col-sm-4">
          <input type="text" class="form-control" autocomplete="off" name="sdrkandung" placeholder="Jumlah Saudara Kandung" required="">
        </div>

        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
          Saudara Tiri
        </label>
        <div class="col-sm-5">
          <input type="text" class="form-control" autocomplete="off" name="sdrtiri" placeholder="Jumlah Saudara Tiri" required="">
        </div>

      </div>
      <!-- end -->

      <div class="form-group row">

        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
          Alamat
        </label>
        <div class="col-sm-4">
          <textarea name="alamat" class="form-control" required=""></textarea>
        </div>
      </div>
      <!-- end -->
    </div>

    <hr>
    <div class="col-sm-12">

     <div class="card-body">
      <div class="form-group row">
        <label for="fid" class="col-sm-1 text-right control-label col-form-label">
          Nama Ayah
        </label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Nama Ayah">
        </div>

        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
          Nama Ibu
        </label>
        <div class="col-sm-5">
         <input type="text" class="form-control" autocomplete="off" name="namaibu" placeholder="Nama Ibu">
       </div>

     </div>
     <!-- end -->

     <div class="form-group row">
      <label for="fid" class="col-sm-1 text-right control-label col-form-label">
       Pekerjaan
     </label>
     <div class="col-sm-2">
       <input type="text" class="form-control" autocomplete="off" name="pekerjaanayah" placeholder="Ayah">
     </div>
     <div class="col-sm-2">
       <input type="text" class="form-control" autocomplete="off" name="pekerjaanibu" placeholder="Ibu">
     </div>

     <label for="fid" class="col-sm-1 text-right control-label col-form-label">
      Agama
    </label>
    <div class="col-sm-5">
     <select name="agama" id="agama" class="form-control">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>
  </div>
</div>
<!-- end -->

<div class="form-group row">


</div>
<!-- end -->

<div class="form-group row">

  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    Alamat
  </label>
  <div class="col-sm-4">
   <textarea name="alamat1" class="form-control" placeholder="Alamat Orang Tua" required=""></textarea>
 </div>

 <label for="fname" class="col-sm-1 text-right control-label col-form-label">
  Nama Wali
</label>
<div class="col-sm-5">
  <input type="text" class="form-control" autocomplete="off" name="nmwali" placeholder="Nama Wali" required="">
</div>

</div>
<!-- end -->

<div class="form-group row">

  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    Pekerjaan
  </label>
  <div class="col-sm-4">
    <input type="text" class="form-control" autocomplete="off" name="pekerjaanwali" placeholder="Nama Wali" required="">
  </div>

  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    Agama
  </label>
  <div class="col-sm-4">
   <select name="agama1" id="agama" class="form-control">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>
  </div>
</div>
<div class="form-group row">

  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    Alamat
  </label>
  <div class="col-sm-4">
    <textarea name="alamat2" class="form-control" placeholder="Alamat Wali" required=""></textarea>
  </div>
</div>
<!-- end -->

</div>
<hr>

<div class="card-body">
  <div class="form-group row">
    <label for="fid" class="col-sm-1 text-right control-label col-form-label">
      Asal Sekolah
    </label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Asal Sekolah" id="asalsekolah" name="nisn">
    </div>

    <label for="fname" class="col-sm-1 text-right control-label col-form-label">
      Tgl Masuk
    </label>
    <div class="col-sm-5">
     <input type="text" class="form-control" autocomplete="off" name="tglmasuk">
   </div>

 </div>
 <!-- end -->

 <div class="form-group row">
  <label for="fid" class="col-sm-1 text-right control-label col-form-label">
   Di Terima dikelas
 </label>
 <div class="col-sm-4">
   <input type="text" class="form-control" placeholder="Di Terima Dikelas" autocomplete="off" name="terimakelas">
 </div>
 <label for="fid" class="col-sm-1 text-right control-label col-form-label">
  Ijazah / Surat Ket
</label>
<div class="col-sm-5">
  <input type="text" class="form-control" autocomplete="off" name="ijazah">
</div>
</div>
<!-- end -->

<div class="form-group row">


</div>
<!-- end -->

<div class="form-group row">

  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    No Induk Sekolah Asal
  </label>
  <div class="col-sm-4">
    <input type="text" class="form-control" autocomplete="off" name="induksekolah" placeholder="No Induk Sekolah" required="">
  </div>
<form action="addbiodata_submit" method="get" accept-charset="utf-8">
  <label for="fname" class="col-sm-1 text-right control-label col-form-label">
    Nilai UN Dan US MTS/SMP
  </label>
  <div class="col-sm-2">
    <input type="text" class="form-control" autocomplete="off" name="un" placeholder="Nilai UN" required="">
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" autocomplete="off" name="us" placeholder="Nilai US" required="">
  </div>

</div>

<br>
<br>
<!-- end -->
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>



</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
