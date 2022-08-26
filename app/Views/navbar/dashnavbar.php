<?php
echo view( 'header/header' );
echo view( 'css/css' );
echo view( 'tophead/tophead' );
echo view( 'footer/footer' );
echo view( 'js/js' );
?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js">
    </script>

    <title>Codeigniter 4 CRUD Operation With Ajax Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/lhbxd2w69x3dawzs7zxlin9qzjsw5w4464sf9gw3lpr39pz4/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


</head>
<div class="masthead">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0"
                style="background-color: white; box-shadow: -3px 0 15px 0 #999;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">

                                <div class="container">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                        Add Blog
                                    </button>

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal Heading</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <h4> Add Blog </h4>
                                                    <div class="overflow-auto">
                                                        <div class="container">
                                                            <form id="blogpageform" name="blogpageform"
                                                                action="<?php echo site_url('blog/store');?>"
                                                                method="post">
                                                                <div class="form-group">
                                                                    <label for="title">Blog Title</label>
                                                                    <input type="text" class="form-control required"
                                                                        id="title" placeholder="Title Here"
                                                                        name="title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="categorydropdown">Blog Category
                                                                        Selector</label>
                                                                    <select class="form-control required"
                                                                        name="categorydropdown" id="categorydropdown"
                                                                        required>
                                                                        <option value="">No Category Selected
                                                                        </option>
                                                                        <?php foreach($category as $row):?>
                                                                        <option
                                                                            value="<?php echo $row['category_name'];?>">
                                                                            <?php echo $row['category_name'];?>
                                                                        </option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="blog_description">Blog
                                                                        Description</label>
                                                                    <input type="text" class="form-control required"
                                                                        id="blog_description"
                                                                        placeholder="Blog Description Here"
                                                                        name="blog_description">
                                                                </div>

                                                                <div class="form-group">

                                                                    <textarea class="tinymce" id="blog_detailadd"
                                                                        name="blog_detailadd" required>

                                                                    </textarea>
                                                                    <script>
                                                                    tinymce.init({
                                                                        selector: 'textarea',
                                                                        plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker link',
                                                                        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents link',
                                                                        toolbar_mode: 'floating',
                                                                        tinycomments_mode: 'embedded',
                                                                        tinycomments_author: 'Author name',

                                                                    });
                                                                    </script>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="author">Author</label>
                                                                    <input type="text" class="form-control required"
                                                                        id="author" placeholder="Author" name="author">
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-primary">Create</button>
                                                        </div>

                                                    </div>
                                                    </form>


                                                    <script>
                                                    $('#categorydropdown').on('change', function() {
                                                        var $category_name = $('#categorydropdown').val();
                                                        $('#categorydropdown').val($category_name);

                                                    });
                                                    </script>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </li>
                    </ul>
                    <hr>

                    <div id="updateModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-xl">
                            <!-- User Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Blog Content</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="updateblogpageform" name="updateblogpageform"
                                        action="<?php echo site_url('blog/update');?>" method="post">
                                        <input type="hidden" class="form-control required" id="blog_id" placeholder=""
                                            name="blog_id" readonly>
                                        <div class="form-group">
                                            <label for="blog_title">Blog Title</label>
                                            <input type="text" class="form-control required" id="blog_title"
                                                placeholder="Title Here" name="blog_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Blog Category</label>
                                            <input type="text" class="form-control required" id="category"
                                                placeholder="Blog Category" name="category">
                                        </div>
                                        <div class="form-group">
                                            <label for="blog_description">Blog
                                                Description</label>
                                            <input type="text" class="form-control required" id="blog_description"
                                                placeholder="Blog Description Here" name="blog_description">
                                        </div>

                                        <div class="form-group">

                                            <textarea class="tinymce" id="blog_detailupdate" name="blog_detailupdate" required>

                                            </textarea>
                                            <script>
                                            tinymce.init({
                                                selector: 'textarea',
                                                plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker link',
                                                toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents link',
                                                toolbar_mode: 'floating',
                                                tinycomments_mode: 'embedded',
                                                tinycomments_author: 'Author name',

                                            });
                                            </script>

                                        </div>
                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control required" id="author"
                                                placeholder="Author" name="author">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <h2><a class="d-inline-block" href="<?php echo base_url().'/blog/showAll' ?>"
                                        target="_blank">Blogs List</a></h2>
                        </div>
                    </div>

                    <table class="table table-bordered" id="adminpagesgrandmastertable">
                        <thead>
                            <tr>
                                <th>Blog Id</th>
                                <th>Blog Title</th>
                                <th>Blog Category</th>
                                <th>Blog Description</th>
                                <th>Author</th>
                                <th>Blog Created Date</th>
                                <th>Blog Modified Date</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
        foreach($blogDetails as $row){
           // $_SESSION["id"]=$row['id']+1;
        ?>
                            <tr id="<?php echo $row['blog_id']; ?>">
                                <td><?php echo $row['blog_id']; ?></td>
                                <td><a class="d-inline-block" href="<?php echo base_url().'/blog/blogDetail/'.$row['blog_id'] ?>"
                                        target="_blank">
                                <?php echo $row['blog_title']; ?></a></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['blog_description']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['created_date']; ?></td>
                                <td><?php echo $row['modified_date']; ?></td>

                                <td>
                                    <a data-id="<?php echo $row['blog_id']; ?>" class="btn btn-primary btnEdit">Edit</a>
                                    <a data-id="<?php echo $row['blog_id']; ?>"
                                        class="btn btn-danger btnDelete">Delete</a>
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
    <script>
    $(document).ready(function() {
        $('body').on('click', '.btnEdit', function() {
            var $blog_id = $(this).attr('data-id');
            $.ajax({
                url: 'edit/' + $blog_id,
                type: "GET",
                dataType: 'json',
                success: function(res) {


                    $('#updateModal').modal('show');

                    const myarray = Object.values(res);

                    $('#updateblogpageform #blog_id').val(myarray[0]['blog_id']);
                    $('#updateblogpageform #blog_title').val(myarray[0]['blog_title']);
                    $('#updateblogpageform #category').val(myarray[0]['category']);
                    $('#updateblogpageform #blog_description').val(myarray[0][
                        'blog_description'
                    ]);
                   // tinymce.activeEditor.setContent(myarray[0]['blog_detail']);
                  
                   tinymce.get('blog_detailupdate').setContent(myarray[0]['blog_detail']);
                    $('#updateblogpageform #author').val(myarray[0]['author']);


                },
                error: function(data) {
                    alert("ERRoR : " + data);
                }
            });
        });
        $(".btn").click(function() {
            $("#updateModal").modal('hide');
        });
    })
    </script>

    </body>

    </html>