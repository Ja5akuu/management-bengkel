 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Edit User</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
            <div class="col-md-12">
                <div class="card">
                    <?php
                    foreach ($edittrans as $data)
                    { 
                        ?>
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                              Invoice
                          </label>
                          <div class="col-sm-4">
                              <input type="text" class="form-control" id="invoice" name="invoice" value="<?php echo $data->invoice ;?>" readonly>
                          </div>

                          <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                              Date
                          </label>
                          <div class="col-sm-5">
                             <input type="text" class="form-control" value="<?php echo $data->tgl ;?>" readonly>
                         </div>

                     </div>
                     <!-- end -->

                     <div class="form-group row">
                      <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                        Customer
                    </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $data->nama ;?>" readonly>
                    </div>

                    <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                        Merk Motor
                    </label>
                    <div class="col-sm-5">
                       <input type="text" class="form-control" value="<?php echo $data->brand ;?>" readonly>
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
                 <input type="text" class="form-control" value="<?php echo $data->type ;?>" readonly>
             </div>

             <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                No Polisi
            </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" value="<?php echo $data->no_pol ;?>" readonly>
            </div>
        </div>
        <!-- end -->

        <div class="form-group row">
          <label for="fid" class="col-sm-1 text-right control-label col-form-label">
            Teknisi
        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $data->teknisi ;?>" readonly>
        </div>

        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
            Keluhan
        </label>
        <div class="col-sm-5">
            <textarea name="keluhan" class="form-control" readonly><?php echo $data->keluhan ;?></textarea>
        </div>
    </div>
    <!-- end -->

    <?php
}
?>
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
     <th>Total</th><!-- 
     <th>Action</th> -->
 </tr>
</thead>
<tbody>
  <?php
  $total=0;
  foreach ($edittrans1 as $temp) {
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
    <!-- <td>
      <a href="<?php //echo base_url().'transaksi/deletetemp/'.$temp->id_temp.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
        DELETE
    </a> -->
<!-- </td> -->
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
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
</div>
</div>

