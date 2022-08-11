<!DOCTYPE html>
<html lang="en">

<head>
    <title>Codeigniter 4 CRUD Operation With Ajax Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <h2>Admin Pages Grand Master</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
            </div>
        </div>

        <table class="table table-bordered" id="adminpagesgrandmastertable">
            <thead>
                <tr>
                    <th>Pages Id</th>
                    <th>Admin Page Name</th>
                    <th>Admin View Path</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($admin_pages_grand_master_detail as $row){
        ?>
                <tr id="<?php echo $row['admin_page_id']; ?>">
                    <td><?php echo $row['admin_page_id']; ?></td>
                    <td><?php echo $row['admin_page_name']; ?></td>
                    <td><?php echo $row['admin_view_path_page']; ?></td>

                    <td>
                        <a data-id="<?php echo $row['admin_page_id']; ?>" class="btn btn-primary btnEdit">Edit</a>
                        <a data-id="<?php echo $row['admin_page_id']; ?>" class="btn btn-danger btnDelete">Delete</a>
                    </td>
                </tr>
                <?php
                  }
                  ?>
            </tbody>
        </table>
        <!-- Add Admin Pages Grand Master Modal -->
        <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- User Admin Pages Grand Master content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Page</h4>
                    </div>
                    <div class="modal-body">
                        <form id="addadminpagesgrandmaster" name="addadminpagesgrandmaster"
                            action="<?php echo site_url('adminpagesgrandmaster/store');?>" method="post">
                            <div class="form-group">
                                <label for="pagedown">Admin Page Name Selector</label>
                                <select class="form-control" name="pagedropdown" id="pagedropdown" required>
                                    <option value="">No Selected</option>
                                    <?php foreach($admin_pages_grand_master_detail as $row):?>
                                    <option value="<?php echo $row['admin_page_name'];?>">
                                        <?php echo $row['admin_page_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control" id="admin_page_name"
                                    placeholder="Enter Pages Name" name="admin_page_name">
                            </div>
                            <div class="form-group">
                                <label for="admin_view_path_page">Admin View Path of Page</label>
                                <input type="text" class="form-control" id="admin_view_path_page"
                                    placeholder="Enter Path" name="admin_view_path_page">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update User Modal -->
        <div id="updateModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- User Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Admin Pages Grand Master</h4>
                    </div>
                    <div class="modal-body">
                        <form id="updateadminpagesgrandmaster" name="updateadminpagesgrandmaster"
                            action="<?php echo site_url('adminpagesgrandmaster/update');?>" method="post">
                            <label for="admin_page_id">Admin Page Id</label>
                            <input type="text" name="admin_page_id" id="admin_page_id" value="Non editable input"
                                readonly>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control" id="admin_page_name"
                                    placeholder="Enter Pages Name" name="admin_page_name">
                            </div>
                            <div class="form-group">
                                <label for="admin_view_path_page">Admin View Path of Page</label>
                                <input type="text" class="form-control" id="admin_view_path_page"
                                    placeholder="Enter Path" name="admin_view_path_page">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            //Add the Master Page  
            $("#addadminpagesgrandmaster").validate({
                rules: {
                    adminpagename: "required",
                    adminviewpathpage: "required",
                },
                messages: {},

                submitHandler: function(form) {
                    var form_action = $("#addadminpagesgrandmaster").attr("action");
                    $.ajax({
                        data: $('#addadminpagesgrandmaster').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {

                            var adminpagesgrandmaster = '<tr id="' + res.data
                                .admin_page_id + '">';
                            adminpagesgrandmaster += '<td>' + res.data.admin_page_id +
                                '</td>';
                            // adminpagesgrandmaster += '<td>' + res.data.admin_page_name + '</td>';
                            adminpagesgrandmaster += '<td>' + res.data.admin_page_name +
                                '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_view_path_page + '</td>';
                            adminpagesgrandmaster += '<td><a data-id="' + res.data
                                .admin_page_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.admin_page_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            adminpagesgrandmaster += '</tr>';
                            $('#adminpagesgrandmastertable').prepend(
                                adminpagesgrandmaster);
                            $('#addadminpagesgrandmaster')[0].reset();
                            //$('#adminpagesgrandmastertable').load('hide');
                        },
                        error: function(data) {}
                    });
                }
            });

            //When Drop Down Select
            $('#pagedropdown').on('change', function() {
                var $admin_page_name = $('#pagedropdown').val();

                $('#addModal #admin_page_name').val($admin_page_name);
            });

            //When click edit Master Page
            $('body').on('click', '.btnEdit', function() {
                var $admin_page_id = $(this).attr('data-id');
                $.ajax({
                    url: 'adminpagesgrandmaster/edit/' + $admin_page_id,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        $('#updateModal').modal('show');
                        $('#updateadminpagesgrandmaster #admin_page_id').val(res.data
                            .admin_page_id);
                        $('#updateadminpagesgrandmaster #admin_page_name').val(res.data
                            .admin_page_name);
                        $('#updateadminpagesgrandmaster #admin_view_path_page').val(res.data
                            .admin_view_path_page);

                    },
                    error: function(data) {}
                });
            });
            // Update the Master Page
            $("#updateadminpagesgrandmaster").validate({
                rules: {

                    admin_page_name: "required",
                    admin_view_path_page: "required",

                },

                messages: {
                    Yes: "Hello",
                },
                submitHandler: function(form) {
                    var form_action = $("#updateadminpagesgrandmaster").attr("action");
                    $.ajax({
                        data: $('#updateadminpagesgrandmaster').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            //    alert(res.data.admin_page_id);
                            var adminpagesgrandmaster = '<td>' + res.data
                                .admin_page_id + '</td>';
                            adminpagesgrandmaster = '<td>' + res.data.admin_page_name +
                                '</td>';
                            //    adminpagesgrandmaster += '<td>' + res.data.admin_page_name + '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_view_path_page + '</td>';
                            adminpagesgrandmaster += '<td><a data-id="' + res.data
                                .admin_page_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.admin_page_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            $('#adminpagesgrandmaster tbody #' + res.data.admin_page_id)
                                .html(adminpagesgrandmaster);
                            $('#updateadminpagesgrandmaster')[0].reset();
                            //  $('#updateModal').modal('hide');
                            $('#updateModal').modal('hide');
                            window.location.reload();

                        },
                        error: function(data) {}
                    });
                }
            });

            //delete adminPagesGrandMaster
            $('body').on('click', '.btnDelete', function() {
                var $admin_page_id = $(this).attr('data-id');
                $.get('adminpagesgrandmaster/delete/' + $admin_page_id, function(data) {
                    $('#adminpagesgrandmastertable tbody ').remove();
                    window.location.reload();
                })
            });

        });
        </script>
    </div>
</body>

</html>