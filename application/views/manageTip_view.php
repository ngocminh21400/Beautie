<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage tips</title>
    <style>
        .cus-btn{
            position: relative;
            bottom: -15px;
            z-index: 1;
            height: 30px;
            width: 30px;
            font-size: 22px;
            line-height: 27px;
            border-radius: 29px;
            padding: 0;
        }
    </style>
</head>
<body>
<?php include 'adminMenu_view.php'; ?>
    <div class="container">
        <h1 class="text-center">Manage tips</h1>
        <hr>
        
        <div class="row">
    <?php foreach ($tipArray as $key => $value):?>
            <div class="col-md-4">
                <abbr title="Delete"><a href="<?php echo base_url();?>Admin/deleteTip/<?php echo $value['id'];?>"  class="btn btn-danger cus-btn">x</a></abbr>
                <abbr title="Edit"><a href="<?php echo base_url();?>Admin/editTip/<?php echo $value['id'];?>" class="btn btn-warning cus-btn">&#183;&#183;&#183;</a></abbr>

                <div class="card">
                    <img class="card-img-top" src="<?php echo $value['image'];?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['title'];?></h5>
                        <small><p class="text-mute">last update <?php echo $value['date'];?></p></small>
                    </div>
                </div>
            </div>
    <?php endforeach;?>
        </div>
    

    </div>

</body>

<style>
        .cus-btn{
            position: relative;
            bottom: -15px;
            z-index: 1;
            height: 30px;
            width: 30px;
            font-size: 22px;
            line-height: 27px;
            border-radius: 29px;
            padding: 0;
        }
    </style>
</html>