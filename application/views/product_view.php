<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beautie - MakeUp</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>1.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>animate.css">
    <script src="<?php echo base_url();?>1.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap.js"></script>


    <link rel="stylesheet" href="<?php echo base_url();?>customfont.css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>custom.css">
    <script src="<?php echo base_url();?>custom.js"></script>

</head>
<body >
<!-- header -->
<?php include "header_view.php";?>
<!-- main section -->
    <?php foreach ($productArr as $key => $value) :?>
    <div class="container-fluid section animated fadeInUp">
        <div class="container">
            <div class="bg-white" style="padding: 0 15px;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="product-pic">
                            <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-detail">
                            <h1><?php echo $value['name']; ?></h1>
                            <p><?php echo $value['brand']; ?></p>
                            <div class="price">
                                $ <?php echo $value['price']-$value['price']*$value['discount'];  ?>
                            </div>

                            <a class="booking-btn" href="../loadview_booking/<?php echo $value['id']; ?>"> Booking now</a>

                            <h3 data-toggle="collapse" data-target="#description">Decription <i class="fa fa-plus" style="float: right;"></i></h3>
                            <hr>
                            <p id="description" class="collapse"><?php echo $value['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <?php endforeach;?>

<!-- relative section -->




<!-- footer -->
<?php include "footer_view.php";?>

    </body>
</html>