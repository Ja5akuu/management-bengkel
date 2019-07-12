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
                    foreach ($barang as $data)
                    { 
                        ?>

                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>barang/update">
                           <div class="card-body">
                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                    Kode Barang
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="id_baja" value="<?php echo $data->id_baja ;?>">
                                </div>

                                <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                    Supplier
                                </label>
                                <div class="col-sm-5">
                                    <select name="supplier" class="form-control">
                                        <?php
                                        foreach ($allsupplier as $data3) {
                                            echo 
                                            "
                                            <option value='".$data3->id_supplier."'>".$data3->supplier."</option>
                                            ";
                                        }
                                        ?>
                                        
                                    </select>
                                </div>

                            </div>
                            <!-- end -->


                            <div class="form-group row">
                                <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                   Nama Barang
                               </label>
                               <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ;?>" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Satuan
                            </label>
                            <div class="col-sm-5">
                                <select name="satuan" class="form-control">
                                 <?php
                                 foreach ($allsatuan as $data2) {
                                    echo 
                                    "
                                    <option value='".$data2->id_satuan."'>".$data2->satuan."</option>
                                    ";
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <!-- end -->


                    <div class="form-group row">
                        <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                            Kategori
                        </label>
                        <div class="col-sm-4">
                          <select name="id_kategori" class="form-control">
                             <?php
                             foreach ($allkategori as $data1) {
                                echo 
                                "
                                <option value='".$data1->id_kategori."'>".$data1->kategori."</option>
                                ";
                            }
                            ?>
                        </select>
                    </div>

                    <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                        Harga beli
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="harga_beli" value="<?php echo $data->harga_beli ;?>">
                    </div>
                </div>
                <!-- end -->

                <div class="form-group row">
                    <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                        Harga Jual
                    </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control"  name="harga_jual" value="<?php echo $data->harga_jual ;?>">
                    </div>

                    <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                        Diskon
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="diskon" value="<?php echo $data->diskon ;?>">
                    </div>
                </div>
                <!-- end -->

                <div class="form-group row">
                    <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                        QTY
                    </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control"  name="qty" value="<?php echo $data->qty ;?>">
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
