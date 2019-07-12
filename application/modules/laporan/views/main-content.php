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
                            <li class="breadcrumb-item active" aria-current="page">Master Siswa</li>
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
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    Report Invoice
               <hr width="100%">
                 <?php echo form_open('laporan/report');?>
                 <div class="card-body">
                    <div class="form-group row">
                        <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                            from
                        </label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" autocomplete="off" name="tglfrom" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                        </div>

                        <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                            To
                        </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" autocomplete="off" name="tglto" id="datepicker-autoclose1" placeholder="mm/dd/yyyy">
                        </div>
                       <button type="submit" class="btn btn-primary">Report</button>
                   </div>
                   <!-- end -->

               </div>
               </form>
           </div>
       </div>
   </div>

   <div class="col-4">
            <div class="card">
                <div class="card-body">
                    NOTA TRANSAKSI
               <hr width="100%">
               <form action="<?php echo base_url().'laporan/nota'; ?>" method="post" >
                 <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <select name="invoice" class="form-control">
                                <?php
                                foreach ($allinvoice as $data) {
                                        # code...
                                   echo 
                                   "
                                   <option value='".$data->invoice."'>".$data->invoice."</option>
                                   ";
                               }
                               ?>
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Nota</button>
                   </div>
                   <!-- end -->

               </div>
                </form>
           </div>
       </div>
   </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>

</div>


