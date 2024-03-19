<?php //var_dump($edit_record); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="d-inline-block">Manage Users<small>Members</small></h1>
        <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-default">Add New User</a>

        <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">
            Launch Default Modal
            </button> -->
        <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    </ol> -->
    </section>

    <!--------------------- Insert Model dialog ---------------------->
    <div class="modal fade" id="modal-default" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add New User</h4>
                </div>
                <form action="/manage_users/insert" method="post">
                    <div class="modal-body">

                        <div class="container-fluid">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="txt_full_name" placeholder="Enter Full Name">
                            </div> 
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="txt_email" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <label>Phone No</label>
                                <input type="text" class="form-control" name="txt_phoneno" placeholder="Enter Phone No">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="txt_username" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txt_password" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="txt_status" placeholder="Enter Status">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <!--------------------- Update Model dialog ---------------------->
    <?php
        if(isset($edit_record)){
    ?>
    <div class="modal fade" id="update_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Update User</h4>
                </div>
                <form method="post">
                    <div class="modal-body">

                        <div class="container-fluid">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="txt_full_name" placeholder="Enter Full Name" value="<?= set_value('txt_full_name',$edit_record['MU_FULL_NAME']); ?>">
                            </div> 
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="txt_email" placeholder="Enter Email Address" value="<?= set_value('txt_email',$edit_record['MU_EMAIL']); ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone No</label>
                                <input type="text" class="form-control" name="txt_phoneno" placeholder="Enter Phone No" value="<?= set_value('txt_phoneno',$edit_record['MU_PHONENO']); ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="txt_username" placeholder="Enter Username" value="<?= set_value('txt_username',$edit_record['MU_USERNAME']); ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txt_password" placeholder="Enter Password" value="<?= set_value('txt_password',$edit_record['MU_PASSWORD']); ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="txt_status" placeholder="Enter Status" value="<?= set_value('txt_status',$edit_record['MU_STATUS']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php
        }// End of edit_record isset
    ?>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="init_datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Phone No</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($manage_users_records as $manage_users_record) {
                                ?>
                                    <tr>
                                        <td><?= $manage_users_record['MU_ID']; ?></td>
                                        <td><?= $manage_users_record['MU_FULL_NAME']; ?></td>
                                        <td><?= $manage_users_record['MU_EMAIL']; ?></td>
                                        <td><?= $manage_users_record['MU_PHONENO']; ?></td>
                                        <td><?= $manage_users_record['MU_USERNAME']; ?></td>
                                        <td><?= $manage_users_record['MU_STATUS']; ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-xs mr-btn" data-toggle="tooltip" title="" href="/manage_users/edit/<?= $manage_users_record['MU_ID']; ?>" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-xs mr-btb" data-toggle="tooltip" title="" href="/manage_users/delete/<?= $manage_users_record['MU_ID']; ?>" data-original-title="Delete" onclick="return confirm('Are You Sure you want to Delete Record ?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>