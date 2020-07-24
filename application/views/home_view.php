<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beautie - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="<?php echo base_url();?>1.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Animate.css">
    <script src="<?php echo base_url();?>1.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap.js"></script>


    <link rel="stylesheet" href="<?php echo base_url();?>customfont.css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>custom.css">
    <script src="<?php echo base_url();?>custom.js"></script>

</head>
<body >
<!-- header -->
<?php include "header_view.php";?>

<!-- slideshow -->
       <div class="container animated fadeInUp">
            <div class="slide-top">
    <?php include 'slideShow.php';?>               
                <div class="slide-top">
                  <script>   setInterval("slideShow()", 10000);</script>
                    <img  id="slide-image">
                    <h2 class="title" id="slide-title"></h2>
                    <div class="content" id="slide-content"></div> 
                    
                    <!-- <div class="text-center" style="top: -30;top: -30px;position: relative;">
                        <?php foreach ($slideArray as $key => $value) :?>
                            <div class="dot <?php echo $key;?>" ></div>    
                        <?php endforeach;?>
                    </div> -->
                <button class="btn-next" onclick="slideShow()"><i class="fa fa-arrow-right btn-next"></i></button>               
                <button class="btn-prev" onclick="slideShowPrev()"><i class="fa fa-arrow-left"></i></button>               
                </div> 
            </div>  


        </div>
<!-- section -->




<!-- footer -->
 
<?php include "footer_view.php";?>

</body>
</html>