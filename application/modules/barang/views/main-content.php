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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-success margin-5" data-toggle="modal" data-target="#Modal2">
                        Add Barang
                    </button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Supplier</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Kategori</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Diskon</th>
                                    <th>QTY</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allbarang as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data->id_baja ?></td>
                                        <td><?php echo $data->supplier ?></td>
                                        <td><?php echo $data->nama ?></td>
                                        <td><?php echo $data->satuan ?></td>
                                        <td><?php echo $data->kategori ?></td>
                                        <td><?php echo $data->harga_beli ?></td>
                                        <td><?php echo $data->harga_jual ?></td>
                                        <td><?php echo $data->diskon ?></td>
                                        <td><?php echo $data->qty ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'barang/edit/'.$data->id_baja.'';?>" class="btn btn-success" >
                                                EDIT
                                            </a> &nbsp
                                            <a href="<?php echo base_url().'barang/delete/'.$data->id_baja.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
                                                DELETE
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!-- Modal -->
    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('barang/addbarang');?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Kode Barang
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_baja" value="<?php echo $kodeotomatis ;?>">
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Supplier
                            </label>
                            <div class="col-sm-5">
                                <select name="supplier" class="form-control">
                                    <?php
                                        foreach ($allsupplier as $data) {
                                            echo 
                                            "
                                            <option value='".$data->id_supplier."'>".$data->supplier."</option>
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
                                <input type="text" class="form-control" name="nama" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Satuan
                            </label>
                            <div class="col-sm-5">
                                <select name="satuan" class="form-control">
                                     <?php
                                        foreach ($allsatuan as $data) {
                                            echo 
                                            "
                                            <option value='".$data->id_satuan."'>".$data->satuan."</option>
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
                                        foreach ($allkategori as $data) {
                                            echo 
                                            "
                                            <option value='".$data->id_kategori."'>".$data->kategori."</option>
                                            ";
                                        }
                                     ?>
                                </select>
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Harga beli
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="harga_beli" placeholder="Harga Beli">
                            </div>
                        </div>
                        <!-- end -->

                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Harga Jual
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="harga_jual" placeholder="Harga Jual" required="" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Diskon
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="diskon" placeholder="Diskon">
                            </div>
                        </div>
                        <!-- end -->

                         <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                QTY
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="qty" placeholder="Qty" required="" >
                            </div>
                        </div>
                        <!-- end -->


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</div>

</div>


