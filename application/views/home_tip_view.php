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

<!-- section products -->
    <div class="container-fluid section animated fadeInUp">
        <div class="container">
            <div class="" style="padding: 0 15px;">
                

                <div class="row">
        <?php foreach ($tipArray as $key => $value):?>
                        <div class="col-md-12 animated fadeInUp bg-white" style="margin-block-end:4px;">
                            <a class="card-custom" href="./loadview_tip/<?php echo $value['id'];?>">
                                <div class="row" >
                                    <div class="col-md-5">
                                        <img class="card-custom" src="<?php echo $value['image'];?>" alt="" height="270px" width="100%">

                                    </div>
                                    <div class="col-md-7 card-custom" >
                                        <div >
                                            <div style="height:90px;">
                                            <h4 class="card-custom" style="font-size: 32px; max-height:70px;"><?php echo $value['title'];?></h4>
                                            <small><p class="text-mute"><?php echo $value['date'];?></p></small>
                                            </div>
                                            <div class="smalltip"><?php echo $value['tip'];?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
        <?php endforeach;?>
                    </div>
                
            </div> 
        </div>
    </div>
<!-- footer -->
<?php include "footer_view.php";?>


</body>
</html>





