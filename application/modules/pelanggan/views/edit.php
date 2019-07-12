 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Edit Pelanggan</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
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
                    foreach ($pelanggan as $data)
                    { 
                        ?>

                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>pelanggan/update">
                         <div class="card-body">
                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    Kode
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="id_pelanggan" value="<?php echo $data->id_pelanggan ;?>" readonly>
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    No Polisi
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="fnama" name="no_polisi" value="<?php echo $data->no_polisi ;?>" required="" >
                                </div>

                            </div>
                            <!-- end -->

                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    Nama 
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="ftmp" name="nm_pelanggan" value="<?php echo $data->nm_pelanggan ;?>" required="" >
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    Alamat
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  name="alamat" value="<?php echo $data->alamat ;?>">
                                </div>
                            </div>
                            <!-- end -->

                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    Kota
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="kota" value="<?php echo $data->kota ;?>" required="" >
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    Telp
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  name="telp" value="<?php echo $data->telp ;?>">
                                </div>
                            </div>
                            <!-- end -->


                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    Type Motor
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="tipe_kendaraan" value="<?php echo $data->tipe_kendaraan ;?>" required="" >
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    No Rangka
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  name="no_rangka" value="<?php echo $data->no_rangka ;?>">
                                </div>
                            </div>
                            <!-- end -->

                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    No Mesin
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="no_mesin" value="<?php echo $data->no_mesin ;?>" required="" >
                                </div>

                            </div>
                            <!-- end -->



                        </div>
                        <div class="modal-footer">
                            <a href="http://localhost/skripsi/pelanggan" class="btn btn-success">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
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
</div>
</div>
</div>
</div>
