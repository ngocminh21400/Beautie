<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>

    <!--bootstrap-->
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


  <link rel="stylesheet" href="<?php echo base_url();?>custom.css">
</head>
<body>
    
    <div class="container">
        <h2 class="text-center">Booking details</h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-push-3 col-sm-6">

                    <form action="../booking" method="post" enctype="multipart/formdata">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="abc@example.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="ABC ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Phone number: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="0123456789">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-push-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Book!</button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>

</body>
</html>