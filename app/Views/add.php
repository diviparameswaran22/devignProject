<head>

</head>
<?php echo view('dashhead');?>
<h4> Add Blog </h4>
<div class="overflow-auto">
    <div class="container" style="max-width: 1000px;">

        <form id="blogpageform" name="blogpageform" action="<?php echo site_url('blog/add');?>" method="post">
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" class="form-control required" id="title"
                     placeholder="Title Here" name="title">
            </div>
            <div class="form-group">
                <label for="categorydropdown">Blog Category Selector</label>
                <select class="form-control required" name="categorydropdown" id="categorydropdown" required>
                    <option value="">No Category Selected</option>
                    <?php foreach($category_detail as $row):?>
                    <option value="<?php echo $row['category_name'];?>">
                        <?php echo $row['category_name'];?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">

                <textarea class="tinymce" id="description" name="description" required>

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
                <input type="text" class="form-control required" id="author" placeholder="Author" name="author">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
    </div>

</div>
</form>


<script>
$('#categorydropdown').on('change', function() {
                var $category_name = $('#categorydropdown').val();
                $('#categorydropdown').val($category_name);
 
            });

</script>