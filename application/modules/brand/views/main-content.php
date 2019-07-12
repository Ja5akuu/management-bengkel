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
                            <li class="breadcrumb-item active" aria-current="page">Master brand</li>
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
                        Add brand
                    </button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID brand</th>
                                    <th>brand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allbrand as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data->id_brand ?></td>
                                        <td><?php echo $data->brand ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'brand/edit/'.$data->id_brand.'';?>" class="btn btn-success" >
                                                EDIT
                                            </a> &nbsp
                                            <a href="<?php echo base_url().'brand/delete/'.$data->id_brand.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('brand/addbrand');?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fid" class="col-sm-1 text-right control-label col-form-label">
                                Kode brand
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_brand" value="<?php echo $kodeotomatis ;?>">
                            </div>

                            <label for="fname" class="col-sm-1 text-right control-label col-form-label">
                                brand
                            </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="brand" placeholder="brand" >
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


