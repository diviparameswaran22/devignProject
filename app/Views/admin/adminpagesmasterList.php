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
                <h2>Admin Pages Master</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
            </div>
        </div>

        <table class="table table-bordered" id="adminpagesgrandmastertable">
            <thead>
                <tr>
                    <th>Admin Pages Id</th>
                    <th>Admin Pages Component Id</th>
                    <th>Admin Component Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($admin_pages_grand_master_detail as $row){
        ?>
                <tr id="<?php echo $row['admin_page_id'].$row['admin_component_id']; ?>">
                    <td><?php echo $row['admin_page_id']; ?></td>
                    <td><?php echo $row['admin_component_id']; ?></td>
                    <td><?php echo $row['admin_component_name']; ?></td>
                    <td>
                        <a data-id="<?php echo $row['admin_page_id'].$row['admin_component_id']; ?>"
                            class="btn btn-primary btnEdit">Edit</a>
                        <a data-id="<?php echo $row['admin_page_id'].$row['admin_component_id']; ?>"
                            class="btn btn-danger btnDelete">Delete</a>
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
                        <form id="adminpagesmaster" name="adminpagesmaster"
                            action="<?php echo site_url('adminpagesmaster/store');?>" method="post">
                            <div class="form-group">
                                <label for="admin_page_id">Admin Page Id</label>
                                <input type="text" class="form-control" id="admin_page_id" placeholder="Enter Pages Id"
                                    name="admin_page_id">
                            </div>
                            <div class="form-group">
                                <label for="admin_page_component_id">Admin Page Component Id</label>
                                <input type="text" class="form-control" id="admin_page_component_id"
                                    placeholder="Enter Component Id" name="admin_page_component_id">
                            </div>
                            <div class="form-group">
                                <label for="admin_component_name">Admin Component Name</label>
                                <input type="text" class="form-control" id="admin_component_name"
                                    placeholder="Enter Component Name" name="admin_component_name">
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
                        <h4 class="modal-title">Update Admin Pages Master</h4>
                    </div>
                    <div class="modal-body">
                        <form id="updateadminpagesmaster" name="updateadminpagesmaster"
                            action="<?php echo site_url('adminpagesmaster/update');?>" method="post">
                            <label for="admin_page_id">Admin Page Id</label>
                            <input type="text" name="admin_page_id" id="admin_page_id" value="Non editable input"
                                readonly>
                            <div class="form-group">
                                <label for="admin_page_component_id">Admin Page Name</label>
                                <input type="text" class="form-control" id="admin_page_component_id"
                                    placeholder="Admin Component Id" name="admin_page_component_id">
                            </div>
                            <div class="form-group">
                                <label for="admin_component_name">Admin View Path of Page</label>
                                <input type="text" class="form-control" id="admin_component_name"
                                    placeholder="Admin Component Name" name="admin_component_name">
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
            $("#adminpagesmaster").validate({
                rules: {
                    admincomponentname: "required",
                },
                messages: {},
                submitHandler: function(form) {
                    var form_action = $("#adminpagesmaster").attr("action");
                    $.ajax({
                        data: $('#adminpagesmaster').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            var adminpagesgrandmaster = '<tr id="' + res.data
                                .admin_page_id + '">';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_page_component_id + '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_component_name + '</td>';
                            adminpagesgrandmaster += '<td><a data-id="' + res.data
                                .admin_page_id + res.data.admin_page_component_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.admin_page_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            adminpagesgrandmaster += '</tr>';
                            $('#adminpagesmastertable').prepend(
                                adminpagesgrandmaster);
                            $('#addModal').modal('hide');

                        },
                        error: function(data) {}
                    });
                }
            });
            //When click edit Master Page
            $('body').on('click', '.btnEdit', function() {
                var $admin_page_id = $(this).attr('data-id');
                $.ajax({
                    url: 'adminpagesmaster/edit/' + $admin_page_id,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        $('#updateModal').modal('show');
                        $('#updateadminpagesmaster #admin_page_id').val(res.data
                            .admin_page_id);
                        $('#updateadminpagesmaster #admin_page_component_id').val(res.data
                            .admin_page_component_id);
                        $('#updateadminpagesmaster #admin_component_name').val(res.data
                            .admin_component_name);
                    },
                    error: function(data) {}
                });
            });
            // Update the Master Page
            $("#updateadminpagesmaster").validate({
                rules: {
                    admin_page_component_id: "required",
                    admin_component_name: "required",
                },
                messages: {
                    Yes: "Hello",
                },
                submitHandler: function(form) {
                    var form_action = $("#updateadminpagesmaster").attr("action");
                    $.ajax({
                        data: $('#updateadminpagesmaster').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            var adminpagesgrandmaster = '<td>' + res.data
                                .admin_page_id + '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_page_component_id +
                                '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_component_name + '</td>';
                            adminpagesgrandmaster += '<td><a data-id="' + res.data
                                .admin_page_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.admin_page_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            $('#updateModal').modal('hide');
                            $('#adminpagesmastertable tbody #' + res.data
                                .admin_page_id).html(adminpagesgrandmaster);
                        },
                        error: function(data) {}
                    });
                }
            });

            //delete adminPagesGrandMaster
            $('body').on('click', '.btnDelete', function() {
                var $admin_page_id = $(this).attr('data-id');
                $.get('adminpagesmaster/delete/' + $admin_page_id, function(data) {
                    $('#adminpagesmastertable tbody ').remove();
                    window.location.reload();
                })
            });
        });
        </script>
    </div>
</body>

</html>