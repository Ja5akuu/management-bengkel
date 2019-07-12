 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Edit customer</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit customer</li>
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
                    foreach ($customer as $data)
                    { 
                        ?>

                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>customer/update">
                         <div class="card-body">
                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    ID customer
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="id_customer" value="<?php echo $data->id_customer ?>" readonly>
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    Nama customer
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  name="customer" value="<?php echo $data->nama ?>" required="">
                                </div>

                            </div>
                            <!-- end -->

                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    HP
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="hp" value="<?php echo $data->hp ?>" readonly>
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    Alamat
                                </label>
                                <div class="col-sm-5">
                                    <textarea name="alamat"><?php echo $data->hp ?></textarea>
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
