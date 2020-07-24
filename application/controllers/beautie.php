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
    class beautie extends CI_Controller {
     
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Home_model'); 
            $this->load->model('Admin_model');
            
            
        }
        
        public function index()
        {
            $this->load->model('Admin_model');
            $slideData = $this->Admin_model->getSlideData();
            $slideData = json_decode($slideData,true);

            $footerData = $this->Admin_model->getFooterData();
            $footerData = json_decode($footerData,true);
            $footerData = array('0' => $footerData);


            $loadData = array('slideArray' => $slideData,
                                'footerArray' => $footerData);
 
            $this->load->view('home_view',$loadData);
            
        }
    
        public function loadview_MakeUp()
        {
            $numberOfPage = $this->Home_model->numberOfPage();
            $productData = $this->Home_model->initProductPage();
            $footerData = $this->Admin_model->getFooterData();
            $footerData = json_decode($footerData,true);
            $footerData = array('0' => $footerData);


            $data = array('productArray' => $productData,
                            'numberOfPage' => $numberOfPage,
                            'footerArray' => $footerData);
            

            $this->load->view('home_makeup_view',$data);
            
        }
        
        public function page($page)
        {
            $numberOfPage = $this->Home_model->numberOfPage();
            $productData = $this->Home_model->getProductByPageNumber($page);
            $footerData = $this->Admin_model->getFooterData();
            $footerData = json_decode($footerData,true);
            $footerData = array('0' => $footerData);


            $data = array('productArray' => $productData,
                            'numberOfPage' => $numberOfPage,
                            'footerArray' => $footerData);
            $this->load->view('home_makeup_view',$data);
            
        }

        public function loadview_product($id)
        {
            $product = $this->Admin_model->getOneProduct($id);

           $footerData = $this->Admin_model->getFooterData();
           $footerData = json_decode($footerData,true);
           $footerData = array('0' => $footerData);

           $loadData = array('productArr' => $product,
                            'footerArray' => $footerData);

            $this->load->view('product_view',$loadData);
            
        }
   
    
        public function loadview_booking($id)
        {
            $this->load->view('booking_view');
        }

        public function booking()
        {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $date = getdate();            
 
           if($this->Home_model->postBookingDetail($email,$name,$phone,$date))
           {
               $this->load->view('donehome_view');
               
           }

           $this->send($name,$email,$phone,$date);
           
        }

        public function send($name,$email,$phone,$date)
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
                $mail->addAddress('miizttnm@gmail.com', $name);     // Add a recipient


                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'New Booking Form '.$name;
                $mail->Body    = 'Name: '.$name.'   Email: '.$email.'   Phone: '.$phone.'   Date: '.$date['year'].$date['month'].$date['mday'];

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        public function loadview_tipList()
        {
            $data = $this->Admin_model->getTip();
            $footerData = $this->Admin_model->getFooterData();
            $footerData = json_decode($footerData,true);
            $footerData = array('0' => $footerData);

            $loadData = array('tipArray' => $data,
                            'footerArray' => $footerData);

            $this->load->view('home_tip_view', $loadData);
 

        }

        public function loadview_tip($id)
        {
            $tip = $this->Admin_model->getOneTip($id);
            $lastUpdate = $this->Home_model->lastUpdateTip($id);
            $footerData = $this->Admin_model->getFooterData();
            $footerData = json_decode($footerData,true);
            $footerData = array('0' => $footerData);
            
            $data = array('tip' => $tip,
                            'lastUpdate' => $lastUpdate,
                            'footerArray' => $footerData);
            $this->load->view('tip_view',$data);
        }

     }
    /* End of file Controllername.php */
    
?>