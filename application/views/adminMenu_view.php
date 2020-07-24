<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Menu</title>

 
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="<?php echo base_url();?>custom.css">

</head>
<body>

<?php if($this->session->userdata('name')==NULL){
redirect('Admin/login','refresh');
} 
?> 


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item ">
        <a class="navbar-brand" href="<?php echo base_url();?>Admin">Admin Menu</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/loadview_addSlide">Add Slide</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/slidetoedit">Edit Slide</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/editFooter">Edit Footer</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/loadview_addProduct">Add product</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/loadview_manageProduct">Manage product</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/loadview_addTip">Add tips</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/loadview_manageTip">Manage tips</a>
        </li>
        <li class="nav-item" style="position: absolute; right:10px;">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

            <a class="nav-link" href="<?php echo base_url();?>Admin/signout"><i style='font-size:24px' class='fas'>&#xf2f5;</i></a>
        </li>
    </ul>
    </nav>
    

</body>
</html>