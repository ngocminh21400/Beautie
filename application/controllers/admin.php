<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require("Sendmail/SMTP.php");
require("Sendmail/POP3.php");
require("Sendmail/PHPMailer.php");
require("Sendmail/OAuth.php");
require("Sendmail/Exception.php");
class admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        
    }
    

    public function index()
    {
        
       $this->load->view('adminLoginSuccess_view');

    }
//login
    public function login()
    {
        $this->load->view('adminLogin_view');        
    }

    public function check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Admin_model->login($username,$password);

        $check = count($user);
        if($check==1)
        {
            $userSes = array(
                'username' => $user[0]['username'],
                'password' => $user[0]['password'],
                'name' => $user[0]['name']
            );
            
            $this->session->set_userdata($userSes); 
            
            redirect('./Admin','refresh');
            
        }
        else {
            $this->load->view('adminLogin_view');
            echo '<div class="alert alert-danger" style="z-index:100;position:fixed;top:0; width:100%;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Wrong! </strong> Your username or password must have been wrong, please try again!
        </div>';
            
        }
    }
//forgetpasssword
    public function forgetPassword()
    {
        $email = $this->input->post('email');
        // echo $email;
        $confirm = $this->Admin_model->confirmEmail($email);
        // echo $confirm;   
        if($confirm == 0)
        {   echo 'Your email has not been registered. Please <a href="" data-target="#forgot-password" data-toggle="modal" data-dismiss="modal">retry</a>';}
        if($confirm !=0) {
            $varify = $this->Admin_model->getVarify($email);
            $this->sendVarify($email,$varify);

            echo     '<div class="form-varify">
            <h5>Enter your verification code: </h5>
            <br>
            <input id="code" name="code" type="text" maxLength="4" size="4" min="0" max="9" />
            <button name="varify" id="varify" type="button" class="btn btn-primary btn-embossed">Verify</button>

          </div>
          <script>
          $("#varify").click(function(event) { 

            $.ajax({
              type: "post",
              url: "';  echo base_url(); echo 'Admin/checkVarify",
              dataType: "html",
              data: {
                code : $("#code").val(),
                email : $("#email-confirm").val()
              }      
             
            }).always(function(data) { 
              $("#ketqua").html(data);
             });
           });
          </script>
          ';
        }

    }

    public function resetVarify()
    {
        $email = $this->input->post('email');

        $this->Admin_model->setNewVarify($email);

    }
    
    public function sendVarify($email,$varify)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
                //Server settings
            //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'annhienpa@gmail.com';                     // SMTP username
                $mail->Password   = 'YANGYANGiwalu';                               // SMTP password
                $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('server@gmail.com', 'Beautie');
                $mail->addAddress($email, '');     // Add a recipient


                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Varify code';
                $mail->Body    = 'here is your verification code, <h1>'.$varify.'</h1> <br> note: this verification code is only valid for 3 minitues';
                $mail->send();
                // echo 'send';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function checkVarify()
    {
        $email = $this->input->post('email');
        $varify = $this->input->post('code');
   
        $code = $this->Admin_model->getVarify($email);
  
        if ($varify != $code) {
            echo     '<div class="form-varify">
            <h5>Enter your verification code: </h5>
            <small class="text-danger">Your verification code is wrong, please try again!</small>
            <br>
            <input id="code" name="code" type="text" maxLength="4" size="4" min="0" max="9" />
            <button name="varify" id="varify" type="button" class="btn btn-primary btn-embossed">Verify</button>

          </div>
          <script>
          $("#varify").click(function(event) { 

            $.ajax({
              type: "post",
              url: "';  echo base_url(); echo 'Admin/checkVarify",
              dataType: "html",
              data: {
                code : $("#code").val(),
                email : $("#email-confirm").val()
              }      
             
            }).always(function(data) { 
              $("#ketqua").html(data);
             });
           });
          </script>
          ';
        }
        if($varify == $code)
        {
            $noidung = '<input id="emailconfirm" name="emailconfirm" value="'.$email.'" style="display:none;"/>';
            echo '                <form action="resetPassword" method="post">
            <h6>Reset your password: (at least 6 character)</h6>
            <br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input onchange="check_pass();" id="password1" name="password1" required type="password" class="form-control" placeholder="password" >
            </div>
            <div class="input-group mb-3" style=" margin-bottom: 0px !important;">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input onkeyup="check_pass();" id="confirm" name="confirm" required type="password" class="form-control" placeholder="confirm password">
            </div>
            <small id="warning" class="text-danger" style="display: block; min-height: 30px;">  </small>

            <button type="submit" id="reset-password" name="reset-password" class="btn login_btn">Confirm</button>';
            echo $noidung;

         echo '</form>
            <script>
              
                function check_pass() {
                  if (document.getElementById("password1").value ==
                          document.getElementById("confirm").value) {
                      document.getElementById("reset-password").disabled = false;
                      document.getElementById("warning").innerHTML="";

                  } else {
                      document.getElementById("reset-password").disabled = true;
                      document.getElementById("warning").innerHTML="not match";
                  }
              }

            </script>';
        }
        
    }

    public function resetPassword()
    {
        $email = $this->input->post('emailconfirm');
        $password = $this->input->post('password1');
 
        if($this->Admin_model->resetPassword($email, $password))
        {
            $this->load->view('adminLogin_view');
            echo '<div class="alert alert-success" style="z-index:100;position:fixed;top:0; width:100%;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Done! </strong> Your password has been reseted, please login again!
        </div>';
        }
    }
//sign out
    public function signout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('name');
        
        redirect('./Admin','refresh');
        

    }

//add slide
    public function loadview_addSlide()
    {
        $this->load->view('addSlide_view');
        
    }
    public function addSlide()
    {        
        //load ảnh
        
                $config['upload_path']          = realpath(dirname(getcwd()))."/Beautie/Files/TopBanner/";
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3000;

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('topBannerImage'))
                { 
                    if($_FILES["topBannerImage"]["size"]>3000)
                    {echo "file too larg!";}
                    else
                    {
                        echo "this file's not allowed!";
                    }
                }
            if($_FILES["topBannerImage"]["name"] == null)
            {
                $_FILES["topBannerImage"]["name"] = 'default.jpg';
            }
        
    //lấy dữ liệu từ view
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $image = base_url()."Files/TopBanner/".$_FILES["topBannerImage"]["name"];

        $dataToUpdate = array(
            'title' => $title,
            'content' => $content,
            'topBannerImage' => $image
        );


    //decode phần text trong cột  value
        $slideData = $this->Admin_model->getSlideData();
        $slideData = json_decode($slideData,true);
        if($slideData == null)
        {   $slideData = array();}

    //push vào mảng và encode
        array_push($slideData, $dataToUpdate);   
        $slideData = json_encode($slideData);

    // update

        if( $this->Admin_model->updateSlideData($slideData))   
        {               
            $this->load->view('done_view');
           
        }
     
    }

//edit sllide
    public function slideToEdit()
    {   
        //lấy dữ liệu từ model, decode
            $dataToEdit = $this->Admin_model->getSlideData();
            $dataToEdit = json_decode($dataToEdit,true);

            $dataToEdit = array('dataArray' => $dataToEdit );
            $this->load->view('editSlide_view', $dataToEdit);
    
        }

    public function editSlide()
    { 
        //lấy nội dung từ view
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            
            //lấy file ảnh

                $imageName = $_FILES['topBannerImage']['name'];
                $file_tmp = $_FILES['topBannerImage']['tmp_name'];
                $topBannerImage_old = $this->input->post('topBannerImage_old');
                

                $topBannerImage = array();

                for ($i=0; $i < count($imageName) ; $i++) { 
                    if($imageName[$i]==""){
                        $imageName[$i] = $topBannerImage_old[$i];
                        $topBannerImage[$i] = $imageName[$i];
                    }
                    else{
                        $target_dir = "Files/TopBanner/";
                        $target_file = $target_dir . $imageName[$i];

                        
                        $config['upload_path']          = realpath(dirname(getcwd()))."/Beautie/Files/TopBanner/";
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 3000;

                            $_FILES['file']['name'] = $_FILES['topBannerImage']['name'][$i];
                            $_FILES['file']['type'] = $_FILES['topBannerImage']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['topBannerImage']['tmp_name'][$i];
                            $_FILES['file']['error'] = $_FILES['topBannerImage']['error'][$i];
                            $_FILES['file']['size'] = $_FILES['topBannerImage']['size'][$i];

                            $config['file_name'] = $_FILES['topBannerImage']['name'][$i];
                     
                            $this->load->library('upload',$config); 
                      
                            if($this->upload->do_upload('file'))
                            { 
                                $topBannerImage[$i] = base_url().$target_dir.$imageName[$i];
                            }
                           else
                           {
                                echo 'lỗi';
                                
                                $imageName[$i] = $topBannerImage_old[$i];
                                $topBannerImage[$i] = $imageName[$i];
                            }

                    }

                    
                }

        //Tạo mảng allslide chứa tất cả slide
        //insert từng slide vào mảng
            $slideData = array();
            for($i=0; $i<count($imageName); $i++)
            {
                $temp = array('title' => $title[$i] ,
                                'content' => $content[$i],
                                'topBannerImage' => $topBannerImage[$i] );
                array_push($slideData,$temp);
            }

        //encode
            $slideData = json_encode($slideData);
        //update
            if ($this->Admin_model->updateSlideData($slideData))
            {
                $this->load->view('done_view');
                
            }

    }

//edit footer
    public function editFooter()
    {
        //get data
        $dataToEdit = $this->Admin_model->getFooterData();
        $dataToEdit = json_decode($dataToEdit,true);

        $dataToEdit = array('0' => $dataToEdit);
        $dataToEdit = array('dataArray' => $dataToEdit);

        $this->load->view('editFooter_view', $dataToEdit);   
    }

    public function updateFooter()
    {
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $hotline = $this->input->post('hotline');
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $tumblr = $this->input->post('tumblr');
        

        $data = array('address' => $address,
                        'email' => $email ,
                        'hotline' => $hotline,
                        'facebook' => $facebook,
                        'instagram' => $instagram,
                        'twitter' => $twitter ,
                        'tumblr' => $tumblr);
        $data = json_encode($data);
        if($this->Admin_model->updateFooter($data))
        {
            $this->load->view('done_view');
            
        }
    }
//add product 
    public function loadview_addProduct()
    {
        $data = $this->Admin_model->getCategory();
        $data = array('catagory' => $data );
        $this->load->view('addProduct_view',$data);
        
    }
    public function addProduct()
    {
        $name = $this->input->post('name');
        $brand =$this->input->post('brand');
        $price = $this->input->post('price');
        $ctgr_id = $this->input->post('ctgr_id');
        $image = base_url()."Files/Products/".$_FILES["productImage"]["name"];

        $description = $this->input->post('description');
        //load image
            $config['upload_path']          = realpath(dirname(getcwd()))."/Beautie/Files/Products/";
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 3000;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('productImage'))
                    {
                            $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
                        echo "lỗi";
                    }
                    else
                    {
                            $data = array('upload_data' => $this->upload->data());
        
                            if($this->Admin_model->addProduct($name,$brand,$price,$description,$image,$ctgr_id))
                            {
                                $this->load->view('done_view');
                                
                            }

                    }
   
    }

//manage Product   
    public function loadview_manageProduct()
    {
        $data = $this->Admin_model->getProduct();
        $data = array('productArray' => $data );

        $this->load->view('manageProduct_view', $data);
        
    }    
    public function deleteProduct($id)
    {
        if($this->Admin_model->deleteProduct($id))
        {
            
            $this->loadview_manageProduct();
        }
    }


//add tips
    public function loadview_addTip()
    {
        $this->load->view('addTip_view');
        
    }
    public function addTip()
    {   
        //load image
            
            $config['upload_path'] = realpath(dirname(getcwd()))."/Beautie/Files/Tips/";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '3000';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                $data = array('upload_data' => $this->upload->data());
                //echo "success";
            }
            
        $image = base_url()."Files/Tips/".$_FILES["image"]["name"];
        //echo $image;
        $title = $this->input->post('title');
        $tip = $this->input->post('tip');

        if($this->Admin_model->addTip($title,$tip,$image))
        {
            $this->load->view('done_view');
            
        }
        
        
    }

//manage tips
    public function loadview_manageTip()
    {
        $tip = $this->Admin_model->getTip();
        $tip = array('tipArray' => $tip);
        $this->load->view('manageTip_view',$tip);
        
    }

    public function deleteTip($id)
    {
        if($this->Admin_model->deleteTip($id))
        {$this->loadview_manageTip();}
    }



/* End of file Controllername.php */
}
?>