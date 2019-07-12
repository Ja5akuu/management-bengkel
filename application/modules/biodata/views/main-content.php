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
                <div class="card-body">
                    <a href="<?php echo base_url().'biodata/addbiodata';?>" class="btn btn-success">
                        Add Transaksi
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>No Polisi</th>
                                    <th>Teknisi</th>
                                    <th>Keluhan</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                               <!--  <?php
                               // foreach ($alltransaksi as $data) {
                                    ?> -->
                                    <tr>
                                        <td><!--  -->
                                        </a></td>
                                       <!--  <td><?php //echo $data->tgl ?></td>
                                        <td><?php// echo $data->nama ?></td>
                                        <td><?php //echo $data->brand ?></td>
                                        <td><?php //echo $data->type ?></td>
                                        <td><?php// echo $data->no_pol ?></td>
                                        <td><?php //echo $data->teknisi ?></td>
                                        <td><?php //echo $data->keluhan ?></td> -->
                                       <!--  <td>
                                            <a href="<?php //echo base_url().'barang/edit/'.$data->id_transaksi.'';?>" class="btn btn-success" >
                                                EDIT
                                            </a> &nbsp
                                            <a href="<?php //echo base_url().'barang/delete/'.$data->id_transaksi.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
                                                DELETE
                                            </a>
                                        </td> -->
                                    </tr>
                              <!--       <?php
                              //  }
                                ?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
