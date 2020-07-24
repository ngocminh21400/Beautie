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
            <div class="bg-white" style="padding: 0 15px;">
                <div class="row">
                    <div class="col-sm-push-2 col-sm-4">
                        <h4 class="filter">Catagogy: Make up product</h4>
                    </div>
                    <div class="col-sm-push-2 col-sm-4">
                            <h4 class="filter" for="filter" style="float:left;">Filter by:  </h4>
                            <h4 class="filter"><select id="filter" class="" name="filter">
                                <option>A - Z</option>
                                <option>Price: low to high</option>
                                <option>Newest</option>
                                <option>Best seller</option>
                            </select>
                            </h4>
                    </div>
                </div>
                <br>

                <div class="row">
    <?php foreach ($productArray as $key => $value):?>
                    <div class="col-md-4 animated zoomIn">
                        <a class="card-custom" href="<?php echo base_url();?>beautie/loadview_product/<?php echo $value['id'];?>">
                            <div class="card">
                                <img class="card-custom" src="<?php echo $value['image'];?>" alt="" height="350px" width="auto">
                                <div class="card-body">
                                    <h4 class="card-custom"><?php echo $value['name'];?></h4>
                                    <a class="card-custom"><?php echo $value['brand'];?></a>
                                </div>
                            </div>
                        </a>
                    </div>
    <?php endforeach;?>
                </div>
    <?php 
        $URI = $_SERVER['REQUEST_URI'];
        $uri = explode("/",$URI);
        $currentPage = end($uri);
        if(!is_numeric($currentPage))
        {
            $currentPage=1;
        }
    ?>

                <div class="row">
                    <ul class="page-number text-center">
                    <?php if($currentPage>1){ ?>
                        <li><a href="<?php echo base_url();?>beautie/page/<?php echo $currentPage-1;?>">&lsaquo;</a></li> <?php }?>
            <?php for ($i=1; $i <= $numberOfPage ; $i++):?>
                    <?php if ($i == $currentPage){?> 
                        <div class="current"><?= $i?></div>
                    <?php } else {?>     
                        <li><a href="<?php echo base_url();?>beautie/page/<?= $i?>"><?= $i?></a></li>
                    <?php } ?>
            <?php endfor?>
                    <?php if($currentPage < $numberOfPage) { ?>
                        <li><a href="<?php echo base_url();?>beautie/page/<?php echo $currentPage+1;?>">&rsaquo;</a></li> <?php }?>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
<!-- footer -->
<?php include "footer_view.php";?>


</body>
</html>