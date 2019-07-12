 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Change Password</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
            <div class="col-md-6">
                <div class="card">
                    <?php
                    foreach ($user as $data)
                    { 
                        ?>

                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>user/update">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                        User Name
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="hidden" class="form-control" id="fname" name="id" value="<?php echo $data->id_user ;?>">
                                        <input type="text" class="form-control" id="fname" name="username" value="<?php echo $data->username ;?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">
                                        Password
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="lname" name="password" value="<?php echo $data->password ;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">
                                        Level
                                    </label>
                                    <div class="col-sm-9">
                                        <select name="level" class="form-control">
                                            <option value="administrator">Administrator</option>
                                            <option value="admin">Admin</option>
                                            <option value="kasir">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo base_url().'user';?>" class="btn btn-success" >Back</a>
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