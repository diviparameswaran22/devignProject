<!DOCTYPE html>
<html lang="en">

<head>
    <title>Codeigniter 4 CRUD Operation With Ajax Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/lhbxd2w69x3dawzs7zxlin9qzjsw5w4464sf9gw3lpr39pz4/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <h2>Admin Pages Data</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
            </div>
        </div>

        <table class="table table-bordered" id="adminpagesdatatable">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Admin Page Id</th>
                    <th>Admin Page Name</th>
                    <th>Admin Component Id</th>
                    <th>Admin Component Name</th>
                    <th>Admin Component Data</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($admin_pages_data_detail as $row){
        ?>
                <tr id="<?php echo $row['id']; ?>">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['admin_page_id']; ?></td>
                    <td><?php echo $row['admin_page_name']; ?></td>
                    <td><?php echo $row['admin_page_component_data_no']; ?></td>
                    <td><?php echo $row['admin_page_component_name']; ?></td>
                    <td><?php echo $row['admin_page_component_data'];?> </td>
                    <td>
                        <a data-id="<?php echo $row['id']; ?>" class="btn btn-primary btnEdit">Edit</a>
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
                        <form id="addadminpagesdata" name="addadminpagesdata"
                            action="<?php echo site_url('adminpagesdata/store');?>" method="post">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="admin_page_id" placeholder=""
                                    name="admin_page_id">
                            </div>
                            <div class="form-group">
                                <label for="pagedown">Admin Page Name Selector</label>
                                <select class="form-control required" name="pagedropdown" id="pagedropdown" required>
                                    <option value="">No Selected</option>
                                    <?php foreach($admin_pages_id_name_detail as $row):?>
                                    <option value="<?php echo $row['admin_page_name'];?>">
                                        <?php echo $row['admin_page_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control required" id="admin_page_name"
                                    placeholder="Enter Page Name" name="admin_page_name" readonly>
                            </div>

                            <div class="form-group">
                                <label for="admin_page_component_data_no">Admin Component Id</label>
                                <input type="text" class="form-control required" id="admin_page_component_data_no"
                                    placeholder="Enter Component Id" name="admin_page_component_data_no" readonly>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_component_name">Admin Component Name</label>
                                <input type="text" class="form-control required" id="admin_page_component_name"
                                    placeholder="Enter Component Name" name="admin_page_component_name">
                            </div>

                            <div class="form-group">
                                <label for="admin_page_component_data">Admin Component Data</label>
                                <!--<input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> -->
                                <textarea class="tinymce" id="admin_page_component_data" name="admin_page_component_data" required>
                                Welcome to TinyMCE!
                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children : '+body[style],-body[div],p[strong|a|#text]',
                                    forced_root_block : false,
                                });
                                </script>
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
                        <form id="updateadminpagesdata" name="updateadminpagesdata"
                            action="<?php echo site_url('adminpagesdata/update');?>" method="post">
                            <input type="hidden" class="form-control required" id="id" placeholder="" name="id"
                                readonly>

                            <div class="form-group">
                                <label for="admin_page_id">Admin Page Id</label>
                                <input type="text" class="form-control required" id="admin_page_id"
                                    placeholder="Enter Page Id" name="admin_page_id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_name">Admin Page Name</label>
                                <input type="text" class="form-control required" id="admin_page_name"
                                    placeholder="Enter Page Name" name="admin_page_name" readonly>
                            </div>

                            <div class="form-group">
                                <label for="admin_page_component_data_no">Admin Page Component Id</label>
                                <input type="text" class="form-control required" id="admin_page_component_data_no"
                                    placeholder="Enter Component Id" name="admin_page_component_data_no" readonly>
                            </div>
                            <div class="form-group">
                                <label for="admin_page_component_name">Admin Page Component Name</label>
                                <input type="text" class="form-control required" id="admin_page_component_name"
                                    placeholder="Enter Component Name" name="admin_page_component_name">
                            </div>
                            <div class="form-group">
                                <!--                                 <label for="admin_page_component_data">Admin Page Component Data</label>
                                   <input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> 
 -->

                                <textarea class="tinymce" id="admin_page_component_data" name="admin_page_component_data" val="111" required>
                                
                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children : '+body[style],-body[div],p[strong|a|#text]',
                                    forced_root_block : false,
                                });
                                </script>

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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
        </script>


        <script>
        $(document).ready(function() {
            //Add the Master Page
            $('#adminpagesdatatable').DataTable({
                ordering: true,
            });
            $("#addadminpagesdata").validate({
                rules: {
                    admin_page_id: "required",
                    admin_page_name: "required",
                    admin_page_component_data_no: "required",
                    admin_page_component_name: "required",
                    admin_page_component_data_no: "required",

                },
                messages: {},

                submitHandler: function(form) {
                    var form_action = $("#addadminpagesdata").attr("action");
                    $.ajax({
                        data: $('#addadminpagesdata').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            var adminpagesdata = '<tr id="' + res.data.id + '">';
                            adminpagesdata += '<td>' + res.data.id + '</td>';
                            adminpagesdata += '<td>' + res.data.admin_page_id + '</td>';
                            adminpagesdata += '<td>' + res.data.admin_page_name +
                                '</td>';
                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_data_no + '</td>';
                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_name + '</td>';
                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_data + '</td>';

                            adminpagesdata += '<td><a data-id="' + res.data.id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            adminpagesdata += '</tr>';
                            $("#addadminpagesdata")[0].reset();
                            $('#addModal').modal('hide');
                            $('#adminpagesdatatable').prepend(adminpagesdata);


                        },
                        error: function(data) {
                           // alert($('#adminpagesdatatable').val());

                        }
                    });
                }
            });

            $('#pagedropdown').on('change', function() {
                var $admin_page_name = $('#pagedropdown').val();
                $('#addModal #admin_page_name').val($admin_page_name);
                $.get('adminpagesdata/getadminId/' + $admin_page_name, function(data) {
                    var $output = JSON.parse(data);
                    
                    $('#addModal #admin_page_id').val($output[0].admin_page_id);

                    $.get('adminpagesdata/getComponentId/' + $output[0].admin_page_id, function(
                        data) {
                        var $output1 = JSON.parse(data);

                        $('#addModal #admin_page_component_data_no').val(parseInt(
                            $output1[0]
                            .admin_page_component_data_no) + 1);

                    })



                })
            });


            //When click edit Master Page
            $('body').on('click', '.btnEdit', function() {
                var $id = $(this).attr('data-id');
                $.ajax({
                    url: 'adminpagesdata/edit/' + $id,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        $('#updateModal').modal('show');
                        $('#updateadminpagesdata #id').val(res.data.id);

                        $('#updateadminpagesdata #admin_page_id').val(res.data
                            .admin_page_id);
                        $('#updateadminpagesdata #admin_page_name').val(res.data
                            .admin_page_name);
                        $('#updateadminpagesdata #admin_page_component_data_no').val(res
                            .data.admin_page_component_data_no);
                        $('#updateadminpagesdata #admin_page_component_name').val(res.data
                            .admin_page_component_name);
                        $('#updateadminpagesdata #admin_page_component_data').val(res.data
                            .admin_page_component_data);
                        tinymce.activeEditor.setContent(res.data.admin_page_component_data);

		                    
                    },
                    error: function(data) {}
                });
            });
            // Update the Master Page



            $("#updateadminpagesdata").validate({
                rules: {



                },

                messages: {
                    Yes: "Hello",
                },
                submitHandler: function(form) {
                    var form_action = $("#updateadminpagesdata").attr("action");
                    $.ajax({
                        data: $('#updateadminpagesdata').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            // alert(res.data.admin_page_id);
                            var adminpagesdata = '<td>' + res.data.admin_page_id +
                                '</td>';
                            //adminpagesdata += '<td>' + res.data.admin_page_id + '</td>';
                            adminpagesdata += '<td>' + res.data.admin_page_name +
                                '</td>';
                            // adminpagesdata += '<td>' + res.data.admin_page_name + '</td>';
                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_data_no + '</td>';
                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_name + '</td>';

                            adminpagesdata += '<td>' + res.data
                                .admin_page_component_data + '</td>';
                            adminpagesdata += '<td><a data-id="' + res.data.id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            $('#adminpagesdata tbody #' + res.data.id).html(
                                adminpagesdata);
                            $('#updateadminpagesdata')[0].reset();
                            // $('#updateModal').modal('hide');
                            $('#updateModal').modal('hide');
                            window.location.reload();

                        },
                        error: function(data) {}
                    });
                }
            });

            //delete adminPagesGrandMaster
            $('body').on('click', '.btnDelete', function() {
                var $id = $(this).attr('data-id');
                $.get('adminpagesdata/delete/' + $id, function(data) {
                    $('#adminpagesdatatable tbody ').remove();
                    window.location.reload();
                })
            });

        });

        //prevent the event violation error
        
        
        jQuery.event.special.touchstart = { setup: function( _, ns, handle ){ if ( ns.includes("noPreventDefault") ) { this.addEventListener("touchstart", handle, { passive: false }); } else { this.addEventListener("touchstart", handle, { passive: true }); } } };
        </script>
    </div>
</body>

</html>