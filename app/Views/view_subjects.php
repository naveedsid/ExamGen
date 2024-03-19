<?php //var_dump($edit_record); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="d-inline-block">Subjects</h1>
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
                <form action="/subjects/insert" method="post">
                    <div class="modal-body">

                        <div class="container-fluid">
                            <div class="form-group">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" name="txt_subject_name" placeholder="Enter Subject Name">
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
                                <label>Subject Name</label>
                                <input type="text" class="form-control" name="txt_subject_name" placeholder="Enter Subject Name" value="<?= set_value('txt_subject_name',$edit_record['S_NAME']); ?>">
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
                                    <th>Subject Name</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($subjects_records as $subjects_record) {
                                ?>
                                    <tr>
                                        <td><?= $subjects_record['S_ID']; ?></td>
                                        <td><?= $subjects_record['S_NAME']; ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-xs mr-btn" data-toggle="tooltip" title="" href="/subjects/edit/<?= $subjects_record['S_ID']; ?>" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-xs mr-btb" data-toggle="tooltip" title="" href="/subjects/delete/<?= $subjects_record['S_ID']; ?>" data-original-title="Delete" onclick="return confirm('Are You Sure you want to Delete Record ?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
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