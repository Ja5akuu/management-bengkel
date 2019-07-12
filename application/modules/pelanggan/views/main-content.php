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
                            <li class="breadcrumb-item active" aria-current="page">Master Pelanggan</li>
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
                        Add Pelanggan
                    </button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Pelanggan</th>
                                    <th>No Poliisi</th>
                                    <th>Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Tlp</th>
                                    <th>Type Kendaraan</th>
                                    <th>No Rangka</th>
                                    <th>No Mesin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allpelanggan as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data->id_pelanggan ?></td>
                                        <td><?php echo $data->no_polisi ?></td>
                                        <td><?php echo $data->nm_pelanggan ?></td>
                                        <td><?php echo $data->alamat ?></td>
                                        <td><?php echo $data->kota ?></td>
                                        <td><?php echo $data->telp ?></td>
                                        <td><?php echo $data->tipe_kendaraan ?></td>
                                        <td><?php echo $data->no_rangka ?></td>
                                        <td><?php echo $data->no_mesin ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'pelanggan/edit/'.$data->id_pelanggan.'';?>" class="btn btn-success" >
                                                EDIT
                                            </a> &nbsp
                                            <a href="<?php echo base_url().'pelanggan/delete/'.$data->id_pelanggan.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
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
                    <?php echo form_open('pelanggan/addpelanggan');?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Kode
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_pelanggan" value="<?php echo $kodeotomatis ;?>" readonly>
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                No Polisi
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="fnama" name="no_polisi" placeholder="No Polisi" required="" >
                            </div>

                        </div>
                        <!-- end -->

                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Nama 
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="ftmp" name="nm_pelanggan" placeholder="Nama Pelanggan" required="" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Alamat
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <!-- end -->

                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Kota
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="kota" placeholder="Kota" required="" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                Telp
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="telp" placeholder="Telp">
                            </div>
                        </div>
                        <!-- end -->

                       
                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Type Motor
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="tipe_kendaraan" placeholder="Type Motor" required="" >
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                No Rangka
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="no_rangka" placeholder="No Rangka">
                            </div>
                        </div>
                        <!-- end -->

                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                No Mesin
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_mesin" placeholder="No Mesin" required="" >
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

