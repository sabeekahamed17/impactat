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
              //$mail->addAddress('vijay@appoets.com');
 // chefmural73@gmail.com
           

              $mail->isHTML(true);
              $mail->Subject = "Enquiry from ".$name;
              $mail->Body    ="<p style='font-size: 12pt; font-family: Cambria;' >Hi Admin,<br></p>
<p style='font-size: 12pt; font-family: Cambria;' >Please check the below Enquiry details.</p>


<p style='font-size: 12pt; font-family: Cambria;' ><b>Name  : </b>".$name."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Age  : </b>".$age."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Gender  : </b>".$gender."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Email ID : </b>".$email."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Contact Number: </b>".$phone."</p>

<p style='font-size: 12pt; font-family: Cambria;' ><b>What would you like to talk about?: </b>".$talk_about."</p>

<p style='font-size: 12pt; font-family: Cambria;' ><b>Your convenient time for the call: </b>".$call_time."</p>";

 


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
  <section class="contact Appointment menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class=" section-title-uin"> Appointment </div>
                        
                    </div>
                </div>
                <div class="row align">
        
                    <div style="margin: 0 auto;
    background-image: url(images/app-bg.jpg);
    padding: 20px;
    /* box-shadow: 2px 2px 12px 2px #ccc; */
    border-radius: 6px;
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;
}

" class="col-md-8">
<?php echo $result ?>
  <div class="section-title">
                            <h2 class="sec-font">Get Appointment</h2>
                            <p></p></div>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6"> <input type="text" name="name" placeholder="Name" required> </div>
                                <div class="col-md-6"> <input type="text" name="age" placeholder="Age" required> </div>
                                <div class="col-md-6"> <input type="text" name="gender" placeholder="Gender" required> </div>
                                <div class="col-md-6"> <input type="text" name="email" placeholder="Email" required> </div>
                                <div class="col-md-6"> <input type="text" name="phone" placeholder="Contact Number" required> </div>
                                
                                <div class="col-md-6"> <input type="text" name="talk_about" placeholder="What would you like to talk about?"> </div>
                                
                                <div class="col-md-6"> <input type="text" name="call_time" placeholder="Your convenient time for the call  "> </div>
                                   

                                
                                <div class="col-lg-4 col-md-4"> <input style="background: #4afcfe;color: #000" type="submit" name="submit" value="Send Message"> </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </section>
<?php include "footer.php" ?>
<style type="text/css">
  input[type="text"], input[type="email"], textarea {
    border: none;
    border-bottom: 1px solid #afafaf;
    width: 100%;
    padding: 7px 0 14px 9px;
    color: #333;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    margin-bottom: 35px;
    outline: none;
    background: transparent;
}
</style>