<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>send mail</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="<?php echo base_url();?>custom.css">

</head>
<body>
        <div class="container"> 
            <br>
            <h2 class="text-center">Send mail</h2>
            <br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="container">
                            <form action="sendmail/send" method="post" enctype="multipart/formdata">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email cần gửi</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <lable class="col-sm-3 col-form-label">Tên người gửi</lable>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" name="name" id="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nội dung</label>
                                    <div class="col-sm-7">
                                        <textarea name="noidung" id="noidung" value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>