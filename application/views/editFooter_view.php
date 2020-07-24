<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Footer</title>

</head>
<body>
    <?php include 'adminMenu_view.php';?>
    
    <div class="container">
        <h1 class="text-center">Edit Footer Information</h1>
        <hr>
    
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="updateFooter" enctype="multipart/form-data" >

<?php foreach ($dataArray as $key => $value):?>

                    <div class="form-group">
                        <label for="my-input">Head office address</label>
                        <input id="address" name="address" class="form-control" type="text" value="<?php echo $value['address'];?>">
                    </div> 
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="email" name="email" class="form-control" type="text" value="<?php echo $value['email'];?>">
                    </div>                     
                    <div class="form-group">
                        <label for="my-input">Hotline</label>
                        <input id="hotline" name="hotline" class="form-control" type="text" value="<?php echo $value['hotline'];?>">
                    </div>        
                    <div class="form-group">
                        <label for="my-input">Facebook link</label>
                        <input id="facebook" name="facebook" class="form-control" type="text" value="<?php echo $value['facebook'];?>">
                    </div> 
                    <div class="form-group">
                        <label for="my-input">Instagram link</label>
                        <input id="instagram" name="instagram" class="form-control" type="text" value="<?php echo $value['instagram'];?>">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Twitter link</label>
                        <input id="twitter" name="twitter" class="form-control" type="text" value="<?php echo $value['twitter'];?>">
                    </div> 
                    <div class="form-group">
                        <label for="my-input">Tumblr link</label>
                        <input id="tumblr" name="tumblr" class="form-control" type="text" value="<?php echo $value['tumblr'];?>">
                    </div>                                                     
              
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