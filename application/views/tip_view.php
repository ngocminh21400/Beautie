<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tip</title>

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
    <div class="container-fluid section animated fadeInUp">
        <div class="container">
                <div class="row">
    <?php foreach ($tip as $key => $value) :?>

                    <div class="col-md-8" >
                        <div class="bg-white" style="margin: 10px 10px 10px 0;">
                            <p class="tip-title"><?php echo $value['title']; ?></p>
                            <i><small>Publish: <?php echo $value['date'];?></small></i>
                            <div class="tip"><?php echo $value['tip'];?></div>
                        </div>
                    </div>
     <?php endforeach;?>
<!-- relative section -->

                    <div class="col-md 4"style=" margin: 10px 15px 10px 0px; padding: 0;" >
                        <ul style="background-color:white; padding: 0 20px;">
                            <li style="list-style: none; padding: 2px 0; list-style: none;padding: 2px 0;font-family: Roboto-Bold;font-size: 27px;color: #20807C;">Lastest tip </li>
            <?php foreach ($lastUpdate as $key1 => $value1) :?>
                            
                            <li style="list-style: none; padding: 2px 0;">
                                <a class="card" href="./<?= $value1['id']?>">
                                    <img class="card-img-top" src="<?php echo $value1['image']; ?>" alt="image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $value1['title']; ?></h5>
                                    </div>
                                </a>
                            </li>
           <?php endforeach;?>
           <li style="list-style: none; padding: 2px 0;"> </li>
                        </ul>
                    </div>



                </div>
             
        </div>
    </div>







<!-- footer -->
<?php include "footer_view.php";?>

    </body>
</html>