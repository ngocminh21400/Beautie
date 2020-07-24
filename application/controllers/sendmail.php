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

 class sendmail extends CI_Controller {
 

     public function index()
     {
         $this->load->view('sendmail_view');
         
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
            $mail->setFrom('server@gmail.com', 'Server');
            $mail->addAddress($email, $name);     // Add a recipient


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Auto mail form Server';
            $mail->Body    = $noidung;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
        
        /* End of file sendmail.php */
        
?>