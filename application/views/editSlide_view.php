<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Slices</title>

</head>
<body>
    <?php include 'adminMenu_view.php';?>
    
    <div class="container">
        <h1 class="text-center">Edit Slides Top Banner</h1>
        <hr>
    
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="editSlide" enctype="multipart/form-data" >

<?php foreach ($dataArray as $key => $value):?>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo $value['topBannerImage'];?>" height="70px" width="160px" >
                            </div>
                            <input  id="topBannerImage_old[]" class="form-control disabled" type="text" name="topBannerImage_old[]" value="<?php echo $value['topBannerImage'];?>">

                            <div class="col-sm-8"> 
                                <label for="my-input">Upload image</label>
                                <input id="topBannerImage[]" class="form-control" type="file" name="topBannerImage[]">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input id="title[]" class="form-control" type="text" name="title[]" value="<?php echo $value['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Content</label>
                        <input id="content[]" class="form-control" type="text" name="content[]" value="<?php echo $value['content'];?>">
                    </div>                    
                    <hr>
                    <hr>
<?php endforeach; ?> 
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>