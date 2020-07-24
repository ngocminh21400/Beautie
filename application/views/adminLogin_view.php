<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>


 
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="<?php echo base_url();?>custom.css">
<style>
    		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;

		}
</style>
</head>
<body>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url();?>Files/cssPic/logo1.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="check" method="post" >
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" required name="username" class="form-control input_user" id="username" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" required name="password" class="form-control input_pass" id="password" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
                        <a href="#" role="button" data-toggle="modal" data-target="#forgot-password">Forgot your password?</a>  
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- modal forgot password -->
    <div class="modal fade" id="forgot-password" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Forgot password</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>Fill in your signup email! </p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input id="email-confirm" name="email-confirm" required type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>

            <button type="button" id="send" name="send" class="btn login_btn" data-target="#send-email" data-toggle="modal" data-dismiss="modal">
              <span>Send </span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="send-email" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="ketqua">
      
                </div>

            </div>
        </div>
    </div>  



</body>
<script>
  var mail;
    $('#send').click(function(event){
      $.ajax({
        type: "post",
        url: "<?php echo base_url();?>Admin/forgetPassword",
        dataType: "html",
        data: {email: $('#email-confirm').val()}   
      }
      ).always(function(data){
        $('#ketqua').html(data);
      });
    mail = $('#email-confirm').val();
    var email = {'email': $('#email-confirm').val()};
      setInterval(function(){
          $('#send').load('<?php echo base_url();?>Admin/resetVarify',email)
          },60000);
      });


</script>

</html>
