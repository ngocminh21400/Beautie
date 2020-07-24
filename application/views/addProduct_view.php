<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>

</head>
<body>
<?php include 'adminMenu_view.php'; ?>
    <div class="container">
        <h1 class="text-center">Add Product</h1>
        <hr>
    
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form method="POST" action="addProduct" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="my-input">Upload image</label>
                        <input id="productImage" class="form-control" type="file" name="productImage">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Name</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Name of product">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="my-input">Price</label>
                                <input id="price" class="form-control" type="number" name="price" placeholder="$">
                            </div>  
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="my-input">Brand</label>
                                <input id="brand" class="form-control" type="text" name="brand" placeholder="brand of product">
                            </div>   
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="ctgr_id">Category</label>
                                <select id="ctgr_id" class="custom-select" name="ctgr_id">
                                <?php foreach ($catagory as $key => $value):?>
                                    <option value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label for="my-textarea">Description</label>
                        <textarea id="my-textarea" class="form-control" name="description" id="description" rows="5"></textarea>
                    </div>             
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