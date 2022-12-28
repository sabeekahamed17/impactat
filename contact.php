  <?php include "header.php";



if(isset($_POST['submit']))
{

   
              extract($_REQUEST);
              $from_email='noreply@impactatkay.com';
              $reply_to_email='noreply@impactatkay.com';
              $sender_name='Enquiry From '.$name;
              require 'mailer/PHPMailerAutoload.php';
              $mail = new PHPMailer;
              $mail->isSMTP();
              $mail->Host = 'mail.impactatkay.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'noreply@impactatkay.com';
              $mail->Password = 'kamini@2019#';
              $mail->SMTPSecure = 'tls';
              $mail->Port = 587;
              $mail->AddReplyTo($reply_to_email, $sender_name);
              $mail->setFrom($from_email, $sender_name);
              $mail->addAddress('impact@impactatkay.com');
              //$mail->addAddress('geethpriya@360degreeinfo.co.in');
 // chefmural73@gmail.com
           

              $mail->isHTML(true);
              $mail->Subject = "Enquiry from ".$name;
              $mail->Body    ="<p style='font-size: 12pt; font-family: Cambria;' >Hi Admin,<br></p>
<p style='font-size: 12pt; font-family: Cambria;' >Please check the below Enquiry details.</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Name  : </b>".$name."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Email ID : </b>".$email."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Number: </b>".$phone."</p>



<p style='font-size: 12pt; font-family: Cambria;' ><b>Message: </b>".$message."</p>";
          $mail->SMTPOptions = array(
              'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
              )
            );
          if( $mail->send()){

      $result="<a href='javascript:;' class='alert alert-success'>Thank you for your enquiry. We will get you shortly !!!</a>";
   
     
    }else{
         $result="<a href='javascript:;' class='alert alert-danger'>Try later</a>";
        
    }

}





   ?>
  <section class="contact menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                       <!--  <div class=" section-title-uin"> Feedback </div>
                        <div class="section-title">
                            <h2 class="sec-font">Get In Touch With Us.</h2>
                           <h5><span class="lnr lnr-phone-handset"></span><a href="tel:+91 90031 56757"> +91 90031 56757</a></h5>
                               <h5><span class="lnr lnr-envelope"></span> <a href="mailto:transform@kaminiandyou.com"> impact@kaminiandyou.com</a></h5>
                        </div> -->
                    </div>
                </div>
                <div class="row align">
                    <div class="col-md-5">
                         <div class=" section-title-uin"> Contact </div>
                        <div class="section-title">
                            <h2 class="sec-font">Get In Touch With Us.</h2>
                           <h6><span class="lnr lnr-phone-handset"></span><a href="tel:+91 90031 56757"> +91 90031 56757</a></h6>
                               <h6><span class="lnr lnr-envelope"></span> <a href="mailto:impact@impactatkay.com"> impact@impactatkay.com</a></h6>
                        </div>
                       <img width="60%" src="images/contact.gif">
                    </div>

                   
                    <div class="col-md-7">
                       <?php echo $result ?>

 <div class="form">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                 <input type="text" placeholder="Your Name" name="name"> 
                                </div>
                                <div class="col-md-6">
                                 <input type="text" placeholder="Your Mobile Number" name="phone">
                                  </div>
                                <div class="col-md-12"> 
                                  <input type="text" placeholder="Your Email Address" name="email"> 
                                </div>
                               
                                <div class="col-md-12"> 
                                  <textarea placeholder="Enter Your Message" name="message"></textarea> 
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <p> we all know how important your information is.<br>they are always safe with us.</p>
                                </div>
                                <div class="col-lg-4 col-md-4"> <input type="submit" name="submit" value="Send Message"> </div>
                            </div>
                            </div>
                        </form>
                    
                  </div>
                </div>
            </div>
        </section>
<?php include "footer-1.php" ?>