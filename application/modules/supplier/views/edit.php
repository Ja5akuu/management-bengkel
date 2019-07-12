 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Edit supplier</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit supplier</li>
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
                    foreach ($supplier as $data)
                    { 
                        ?>

                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>supplier/update">
                           <div class="card-body">
                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                ID Supplier
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="id_supplier" value="<?php echo $data->id_supplier ?>" readonly>
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Nama Supplier
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="supplier" value="<?php echo $data->supplier ?>" required="">
                            </div>

                        </div>
                        <!-- end -->


                    </div>
                    <div class="modal-footer">
                        <a href="http://localhost/skripsi/barang" class="btn btn-success">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                        </form>
                        <?php
                    }
                    ?>
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
    