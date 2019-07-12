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
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Beranda</li>
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
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                        <h6 class="text-white">Charts</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

         <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                                <?php
                                foreach ($alltransaksi as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data->invoice ?></td>
                                        <td><?php echo $data->tgl ?></td>
                                        <td><?php echo $data->nama ?></td>
                                        <td><?php echo $data->brand ?></td>
                                        <td><?php echo $data->type ?></td>
                                        <td><?php echo $data->no_pol ?></td>
                                        <td><?php echo $data->teknisi ?></td>
                                        <td><?php echo $data->keluhan ?></td>
                                       <!--  <td>
                                            <a href="<?php //echo base_url().'barang/edit/'.$data->id_transaksi.'';?>" class="btn btn-success" >
                                                EDIT
                                            </a> &nbsp
                                            <a href="<?php //echo base_url().'barang/delete/'.$data->id_transaksi.'';?>" class="btn btn-danger" onClick="return confirmDialog()">
                                                DELETE
                                            </a>
                                        </td> -->
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
    </div>
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
</div>
</div>
