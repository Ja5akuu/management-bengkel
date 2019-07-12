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
              <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
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

        <?php echo form_open('transaksi/addtranskasi');?>
        <div class="card-body">
          <div class="form-group row">
            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
              Invoice
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="invoice" name="invoice" value="<?php echo $kodeotomatis ;?>">
            </div>

            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
              Date
            </label>
            <div class="col-sm-5">
             <input type="text" class="form-control" autocomplete="off" name="tgl" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
           </div>

         </div>
         <!-- end -->

         <div class="form-group row">
          <label for="fid" class="col-sm-1 text-right control-label col-form-label">
            Customer
          </label>
          <div class="col-sm-4">
            <select name="id_customer" id="id_customer" class="form-control">
              <?php
              foreach ($allcustomer as $kustomer) {
                echo 
                "
                <option value='".$kustomer->id_customer."'>".$kustomer->nama."</option>
                ";
              } 
              ?>
            </select>
          </div>

          <label for="fname" class="col-sm-1 text-right control-label col-form-label">
            Merk Motor
          </label>
          <div class="col-sm-5">
           <select name="id_brand" id="id_brand" class="form-control">
            <?php
            foreach ($allbrand as $brand) {
              echo 
              "
              <option value='".$brand->id_brand."'>".$brand->brand."</option>
              ";
            } 
            ?>
          </select>
        </div>

      </div>
      <!-- end -->

      <div class="form-group row">

        
      </div>
      <!-- end -->

      <div class="form-group row">
        <label for="fid" class="col-sm-1 text-right control-label col-form-label">
          Type Motor
        </label>
        <div class="col-sm-4">
         <select name="id_type" id="id_type" class="form-control">
          <?php
          foreach ($alltype as $type) {
            echo 
            "
            <option value='".$type->id_type."'>".$type->type."</option>
            ";
          } 
          ?>
        </select>
      </div>

      <label for="fname" class="col-sm-1 text-right control-label col-form-label">
        No Polisi
      </label>
      <div class="col-sm-5">
        <input type="text" class="form-control" autocomplete="off" name="no_pol" placeholder="No Polisi" required="">
      </div>
    </div>
    <!-- end -->

    <div class="form-group row">
      <label for="fid" class="col-sm-1 text-right control-label col-form-label">
        Teknisi
      </label>
      <div class="col-sm-4">
        <select name="id_teknisi" id="id_teknisi" class="form-control">
          <?php
          foreach ($allteknisi as $teknisi) {
            echo 
            "
            <option value='".$teknisi->id_teknisi."'>".$teknisi->teknisi."</option>
            ";
          } 
          ?>
        </select>
      </div>

      <label for="fname" class="col-sm-1 text-right control-label col-form-label">
        Keluhan
      </label>
      <div class="col-sm-5">
        <textarea name="keluhan" class="form-control" required=""></textarea>
      </div>
    </div>
    <!-- end -->

    <button type="submit" class="btn btn-primary right">Save</button>
  </form>
</div>


<div class="col-sm-12">
  <form action="" method="POST">
    <table class="table">
      <tr>
        <td>
          <input type="hidden"  name="invoice" value="<?php echo $kodeotomatis ;?>">
          <select class="form-control" id="id_baja" name="id_baja" onchange="isi()">
           <?php
           foreach ($allbarang as $barang) {
            echo 
            "
            <option value='".$barang->id_baja."'>".$barang->nama."</option>
            ";
          }
          ?>
        </select>
      </td>
      <td>
        <input type="hidden" class="form-control" name="satuan" id="satuan">
        <input type="hidden" class="form-control" name="category" id="category">
        <input type="hidden" class="form-control" name="stock" id="stock">
        <input type="text" class="form-control" autocomplete="off" name="harga" id="harga" placeholder="Harga" readonly="">
      </td>
      <td>
        <input type="text" class="form-control" autocomplete="off" name="diskon" id="diskon" placeholder="Diskon" readonly="">
      </td>
      <td>
        <input type="text" class="form-control" autocomplete="off" name="qty" id="qty" placeholder="QTY" onchange="cekstock()">
      </td>
      <td><button type="submit" name="addtemp" class="btn btn-primary right" onchange="cekstock()">Tambah</button></td>
    </tr>
  </table> 
</form>
</div>
<table class="table" id=-"" >
 <thead>
   <tr>
     <th>ID Barang</th>
     <th>Nama Barang</th>
     <th>Satuan</th>
     <th>Kategory</th>
     <th>Harga</th>
     <th>Diskon</th>
     <th>QTY</th>
     <th>Total</th>
     <th>Action</th>
   </tr>
 </thead>
 <tbody>
  <?php
  $total=0;
  foreach ($alltemp as $temp) {
    ?>
    <tr>
     <td><?php echo $temp->id_baja ?></td>
     <td><?php echo $temp->nama ?></td>
     <td><?php echo $temp->satuan ?></td>
     <td><?php echo $temp->kategori ?></td>
     <td><?php echo format_rupiah($temp->harga_jual) ?></td>
     <td><?php echo $temp->diskon ?></td>
     <td><?php echo $temp->qty ?></td>
     <td>
      <?php
      $harga = $temp->harga_jual ;
      $disc = $temp->diskon ;
      $qty = $temp->qty;
      $d = ($harga-(($disc/100)*$harga)) ;

      echo format_rupiah($d*$qty) ;
      ?>
    </td>
    <td>
      <a href="<?php echo base_url().'transaksi/deletetemp/'.$temp->id_temp.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
        DELETE
      </a>
    </td>
  </tr>
  <?php $total=$total+$d*$qty; } ?>
  <thead>
    <tr>
      <th><b>GRAND TOTAL</b></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><b><?php echo format_rupiah($total);?></b></th>
    </tr>
  </thead>
</tbody>
</table>

</div>
</div>


<script>
 function isi(){
  var id_baja =document.getElementById("id_baja").value;
        // alert(id_baja);
        $.ajax({
          url:"<?php echo base_url().'transaksi/tes1/';?>"+id_baja,
          data:'id_baja='+id_baja,
          success:function(data){
           var json = data,
           obj = JSON.parse(json);
           $('#harga').val(obj.harga_jual);
           $('#diskon').val(obj.qty);
           $('#category').val(obj.id_kategori);
           $('#diskon').val(obj.diskon);
           $('#satuan').val(obj.id_satuan);
           $('#stock').val(obj.qty);

         }
       });

        
      }

      function kustomer(){
        var id_customer =document.getElementById("id_customer").value;
        // alert(id_baja);
        $.ajax({
          url:"<?php echo base_url().'transaksi/tes2/';?>"+id_customer,
          data:'id_customer='+id_customer,
          success:function(data){
           var json = data,
           obj = JSON.parse(json);
           $('#hp').val(obj.hp);
           $('#alamat').val(obj.alamat);

         }
       });
        
      }

      function cekstock()
      {
        var stock =parseInt(document.getElementById("stock").value);
        var qty = parseInt(document.getElementById("qty").value);

        if (stock < qty ){
          alert(stock);
            //document.getElementById("qty").value = '' ;
          }

        }
      </script>

    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
