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
                    <th>Serial Number</th>
                    <th>Admin Pages Id</th>
                    <th>Admin Page Name</th>
                    <th>Admin View Path</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($admin_pages_grand_master_detail as $row){
           // $_SESSION["id"]=$row['id']+1;
        ?>
                <tr id="<?php echo $row['id']; ?>">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['admin_page_id']; ?></td>
                    <td><?php echo $row['admin_page_name']; ?></td>
                    <td><?php echo $row['admin_view_path_page']; ?></td>
                    <td>
                        <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete">Delete</a>
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
                                <input type="hidden" class="form-control" id="id" name="id" readonly>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="admin_page_id" placeholder=""
                                    name="admin_page_id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="pagedown">Admin Page Name Selector</label>
                                <select class="form-control" name="pagedropdown" id="pagedropdown" required>
                                    <option value="">No Selected</option>
                                    <?php foreach($admin_pages_name_id_detail as $row):?>
                                    <option value="<?php echo $row['admin_page_name'];;?>">
                                        <?php echo $row['admin_page_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control" id="admin_page_name"
                                    placeholder="Selected Page Name" name="admin_page_name" readonly>
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
                            <input type="hidden" name="admin_page_id" id="id" value="Non editable input" readonly>

                            <label for="admin_page_id">Admin Page Id</label>
                            <input type="text" name="admin_page_id" id="admin_page_id" value="Non editable input"
                                readonly>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control" id="admin_page_name"
                                    placeholder="Selected Pages Name" name="admin_page_name" readonly>
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
                            adminpagesgrandmaster += '<td>' + res.data.id +
                                '</td>';
                            adminpagesgrandmaster += '<td>' + res.data.admin_page_id +
                                '</td>';
                            adminpagesgrandmaster += '<td>' + res.data.admin_page_name +
                                '</td>';
                            adminpagesgrandmaster += '<td>' + res.data
                                .admin_view_path_page + '</td>';
                            adminpagesgrandmaster += '<td><a data-id="' + res.data
                                .admin_page_id +
                                '"<a data-id="' +
                                res.data.admin_page_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            adminpagesgrandmaster += '</tr>';
                            $('#adminpagesgrandmastertable').prepend(
                                adminpagesgrandmaster);
                            $('#addModal').modal('hide');
                        },
                        error: function(data) {}
                    });
                }
            });


            $('#pagedropdown').on('change', function() {
                var $admin_page_name = $('#pagedropdown').val();
                $('#addModal #admin_page_name').val($admin_page_name);
                $.get('adminpagesgrandmaster/getadminId/' + $admin_page_name, function(data) {
                    var $output = JSON.parse(data);
                    $('#addModal #admin_page_id').val($output[0].admin_page_id);

                })
            });

            //When click edit Master Page
            $('body').on('click', '.btnEdit', function() {
                var $id = $(this).attr('data-id');
                $.ajax({
                    url: 'adminpagesgrandmaster/edit/' + $id,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        $('#updateModal').modal('show');
                        $('#updateadminpagesgrandmaster #id').val(res.data
                            .id);
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
            //delete adminPagesGrandMaster
            $('body').on('click', '.btnDelete', function() {
                var $id = $(this).attr('data-id');
                $.get('adminpagesgrandmaster/delete/' + $id, function(data) {
                    $('#adminpagesgrandmastertable tbody ').remove();
                    window.location.reload();
                })
            });

        });
        </script>
    </div>
</body>

</html>