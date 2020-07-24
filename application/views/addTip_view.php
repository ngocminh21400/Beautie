<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Tips</title>
    <script src="<?php echo base_url();?>Files/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>Files/ckeditor/ckfinder/ckfinder.js"></script>


</head>
<body>
<?php include 'adminMenu_view.php'; ?>
    <div class="container">
        <h1 class="text-center">Add Tip</h1>
        <hr>
    
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <form method="POST" action="addTip" enctype="multipart/form-data" >
                    
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input id="title" class="form-control" type="text" name="title" placeholder="Title of this tip">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload title image</label>
                        <input id="image" class="form-control" type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="my-textarea">Tip</label>
                        <textarea id="tip" class="form-control" name="tip" rows="10"></textarea>
                    </div> 


<script>
     CKEDITOR.replace('tip',  {
    filebrowserBrowseUrl: '<?php echo base_url();?>Files/ckeditor/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '<?php echo base_url();?>Files/ckeditor/ckfinder/ckfinder.html?Type=Images',

});
</script>



                    <br>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>