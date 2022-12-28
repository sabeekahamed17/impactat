<?php include "header-2.php";

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

<p style='font-size: 12pt; font-family: Cambria;' ><b>Number: </b>".$phone."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Email ID : </b>".$email."</p>
<p style='font-size: 12pt; font-family: Cambria;' ><b>Address: </b>".$subject."</p>


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
    <div class="content homeslider">
        <div class="banner-home-sec">
            <div id="carouselbanner" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselbanner" data-slide-to="0" class="active"></li>
    <li data-target="#carouselbanner" data-slide-to="1"></li>
    <li data-target="#carouselbanner" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner carousel-zoom">
    <div class="carousel-item active">
      <!--   <div class="slider-thumb bg-cover" style="background-image: url(img/particles-with-typed-bg.jpg);"></div> -->
<!--         <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h2 data-animation="animated fadeInRight" class="">Our Goal is </h2>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
      <img class="d-block w-100 impact-banner" src="img/particles-with-typed-bg.jpg" alt="First slide">
             <div class="shadow dark">
      </div>
      
          <div class="section-hero-content">
                 <!--  <a class="ds"  href="#">  
               <img style="    position: relative;
    bottom: 164px;
    right: 55px;
    border: -110pxh4    width: 20%;
    border-radius: 50%;" src="logo-2.png"></a> -->


        <!--   <a class="ds"  href="index.php">  
               <img style="position: relative;
    bottom: 144px;" src="logo-1.png"></a> -->
              <!--     <img src="logo-1.png"> -->
                <h1>Hello I'm <span>Kamini</span></h1>
                <!-- <div class="block">
                    <h4 class="sec-font"><span class="typed"></span></h4>
                </div> --><a href="solutions.php" class="sec-font btn theme-btn">Let's Start <span class="lnr lnr-arrow-right"></span></a>
            </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100 impact-banner" src="img/ban2.png" alt="Second slide">
        <div class="shadow dark">

      </div>
           <div class="section-hero-content">
                 <!--  <a class="ds"  href="#">  
               <img style="    position: relative;
    bottom: 164px;
    right: 55px;
    border: -110pxh4    width: 20%;
    border-radius: 50%;" src="logo-2.png"></a> -->


        <!--   <a class="ds"  href="index.php">  
               <img style="position: relative;
    bottom: 144px;" src="logo-1.png"></a> -->
              <!--     <img src="logo-1.png"> -->
                <h1>Let's Discover  <span>life together at KAY!</span></h1>
                <!-- <div class="block">
                    <h4 class="sec-font"><span class="typed"></span></h4>
                </div> --><a href="solutions.php" class="sec-font btn theme-btn">Let's Start <span class="lnr lnr-arrow-right"></span></a>
            </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100 impact-banner" src="img/ban3.jpg" alt="Second slide">
          <div class="shadow dark">
      </div>
         <div class="section-hero-content">
                 <!--  <a class="ds"  href="#">  
               <img style="    position: relative;
    bottom: 164px;
    right: 55px;
    border: -110pxh4    width: 20%;
    border-radius: 50%;" src="logo-2.png"></a> -->


        <!--   <a class="ds"  href="index.php">  
               <img style="position: relative;
    bottom: 144px;" src="logo-1.png"></a> -->
              <!--     <img src="logo-1.png"> -->
                <h1>Let's Talk,  <span> Discuss and Discover!</span></h1>
                <!-- <div class="block">
                    <h4 class="sec-font"><span class="typed"></span></h4>
                </div> --><a href="solutions.php" class="sec-font btn theme-btn">Let's Start <span class="lnr lnr-arrow-right"></span></a>
            </div>

    </div>
  </div>
 <!--  <a class="carousel-control-prev" href="#carouselbanner" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a> -->
 <!--  <a class="carousel-control-next" href="#carouselbanner" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
            <div id="particles-js-two"></div>
        
        </div>


<section class="about-section about section-gap">

        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="circle-image-gallery mb-md-50">
                        <div class="row">
                            <div class="col-6 gallery-left">
                                <div class="single-img wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <img src="img/about1.png" alt="">
                                </div>
                                <div class="single-img wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <img src="img/about2.png" alt="">
                                </div>
                            </div>
                            <div class="col-6 gallery-right">
                                <div class="single-img wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <img class="animate-float-bob-y" src="img/about3.png" alt="">
                                </div>
                                <div class="single-img wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    <img src="img/about4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-text">
                        <div class="info section-heading mb-35">
                        <h1> About<span> Me</h1>
                         <!--       <h5 class="sec-font">HELLO, </h5> -->
                               <h4>HELLO, <span> I'M Kamini </span></h4>
                          
                      
                        <h5>Transformative  <span> Coaching </span></h5>
                                  </div>
                        <p>
                            Coaching high-impactful individuals to reach their next level, no matter how successful, famous, or wealthy they are. There is a HUGE demand and need for transformative coaching to serve leaders and those who are passionate to impact the world and build their legacy. This is not just limited to CEOs and C-level executives. Entrepreneurs, community leaders, celebrities, artists, athletes and other high-performing individuals also recognize the need of coaches to boost their performance and growth. And with me as your Coach, this will be the opportunity for you to be a highly motivated individual or group. There are two elements to transformative Coaching which can consistently achieve deep connection and transformation for any individual. 

                        </p>

                        <div class="read-btn">
                        <a href="about.html" class="template-btn mt-40">Learn More </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     

<!--         <section style="" class="about">
            <div class="container-fluid ">
            <div class="row">
                    <div class="col-12">
                        <div style="top: 0px;
    left: 60%;" class="section-title-uin">  </div>
                    </div>
                <div class="col-md-6 pn">
                    
                    <div class="traning ">
                    <img src="img/seconeimg1.png" class="tran-coach"></div>



  
            </div>
                   <div class="col-md-6">

                                            <div class="info about-sec-right wow slideInRight">
                                                 <h1> About<span> Me</h1>
                         
                               <h4>HELLO, <span> I'M Kamini </span></h4>
                          
                            <h5>Transformative  <span> Coaching </span></h5>
                            <p>Coaching high-impact individuals to reach their next level, no matter
how successful, famous, or wealthy they are.
There is a HUGE demand and need for transformative coaching to serve leaders
and those passionate to impact the world and build their legacy.
This is not just limited to CEOs and C-level executives. Entrepreneurs,
community leaders, celebrities, artists, athletes and other high-performing
individuals also recognize the need of coaches to boost their performance and
growth.
And with me as your Coach this will be the opportunity for you to be a highimpact individual or group.
There are two elements to Transformative Coaching which consistently achieve
deep connection and transformation for high-impact clients
</p>

                 
                        
                        </div>



                </div>

</div>

            </div>
            

        </section> -->
        <style type="text/css">
            
         
        </style>
        <section style="padding:20px" class="about">
            <div class="container">
                <div class="row" style="align-items: center;">
                
            
         
                  <div class="col-xl-5 col-md-6 col-lg-6">
                     <div class="info wow slideInRight">
                      <h4>The   <span> Science </span></h4>
                            <p> It is understanding the specific, reliable, scientific and universal principles of how human beings work.

</p>
<h4>The   <span> Art </span></h4>
                            <p> This is developed over time, and every individual expresses it differently. While copying others’ techniques is a good part of the learning process initially, relying on them forever will hold you back from waking up to your infinite creative potential as a Leader and/or Trend setter.


</p>
                  </div>  </div>
                  <div class="col-xl-7 col-md-6 col-lg-6">
<div class="about-img-wrap">
<div class="about-img-one bg-f about-bg-1"></div>
<div class="about-img-two bg-f about-bg-2"></div>
</div>
</div>
             <!--      <div class="col-md-5">
                        <div class="my-img-box wow slideInLeft">
                            <div class="my-img"> <img src="img/life1.png" alt="" draggable="false" class=" sec-oneimg"> </div>
                        </div>
                    </div> -->
            </div>

         

           <div class="row">
           
              <div class="col-md-12">
            <div class="info">
                       <h1> <span>MY </span>ACHIEVEMENTS</h1>
                              <ul class="row text-center">
                                 
                <div class="one content-column col-lg-4 col-md-4 col-sm-12">
                   

                         <!--  <li> <span class=" fa fa-square"> </span></li>  -->
                            <h3 class="over">7000+</h3>
                            <h4 class="sec-font">Hours</h4>
                            <p class="built">Practising and learning on the best tools and methods to help people understand and help themselves.</p>
                        
                    
                        </div>
                        <div class="one content-column col-lg-4 col-md-4 col-sm-12">
                           
                               <!--  <li> <span class=" fa fa-square"> </span></li>  -->
                              <h3 class="over">300+</h3>
                                 <h4 class="sec-font">Kids</h4>
                            <p class="built"> I have worked with well over 300 kids and their parents helping them take more control of their lives.</p>
                        </div>
                        
                   <div class="two content-column col-lg-4 col-md-4 col-sm-12">
                          <!-- <li> <span class=" fa fa-square"> </span></li> --> 
                               <h3 class="over">10+</h3>
                               <h4 class="sec-font">years of experience</h4>
                              <p class="built">In Life Coaching, Confidence Boosting, Parenting Guidance, Relationship Enhancing, Wellness Mentoring, Trauma Recovery, Anger Management.</p>
                          </div>
                      
   
                            </ul>
                </div>
            
            </div> 
        </div>
 </div>
        </section>

   <section class="services services-section ">
    <div class="container">
        <div class="row">
                    <div class="col-12 two-title">

                        <div class="info text-center"> 
                            <h1> <span>Services </span></h1> </div>
                      
                    
                    </div>
                </div>
        <div class="features-tab">
            <div class="card services-para">
                <!---->
                <!---->
                <div class="tabs row service-sec" id="__BVID__477">
                    <!---->
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <ul role="tablist" class="nav nav-pills flex-column card-header h-100 border-bottom-0 rounded-0 wow fadeInLeft" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <!---->
                            <li role="presentation" class="nav-item active"><a role="tab"   href="#id1"  class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true" aria-selected="true">LIFE COACH</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" href="#id2"  class="nav-link"  aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false" aria-selected="false" >CONFIDENCE BOOSTER</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" href="#id3"  class="nav-link"  aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false" aria-selected="false" >PARENTING GUIDE </a></li>
                             <li role="presentation" class="nav-item"><a role="tab" href="#id4"  class="nav-link"  aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false" aria-selected="false" >RELATIONSHIP ENHANCER </a></li>
                             <li role="presentation" class="nav-item"><a role="tab" href="#id5"  class="nav-link"  aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false" aria-selected="false" >WELLNESS MENTOR</a></li>
                          <li role="presentation" class="nav-item"><a role="tab" href="#id6"  class="nav-link"  aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false" aria-selected="false" >TRAUMA RECOVERY </a></li>
                            <!---->
                        </ul>
                    </div>
                
                        <div class="col-md-8 col-lg-8 col-sm-12 ">
                    <div class="tab-content col ">
                        <div role="tabpanel " id="id1" class="tab-pane card-body active in ">
                            <div class="image"><img src="img/services-1.png" alt="image"></div>
                            <div class="content">
                                <p>For years I have been studying and discussing issues involved in raising children...</p> <a href="0to4years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                        <div role="tabpanel"  class="tab-pane card-body" id="id2" >
                            <div class="image"><img src="img/services-2.png" alt="image"></div>
                            <div class="content">
                                <p> Learn more about parent coaching, what to expect from a parent coaching session and where to find a..</p> <a href="0to4years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                        <div role="tabpanel"  class="tab-pane card-body" id="id3" >
                            <div class="image"><img src="img/services-3.png" alt="image"></div>
                            <div class="content">
                                <p>There has been a revolutionary set of discoveries in the field of psychology that gives people a clear understanding.. ...</p> <a href="60years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                           <div role="tabpanel"  class="tab-pane card-body" id="id4" >
                            <div class="image"><img src="img/services-4.png" alt="image"></div>
                            <div class="content">
                                <p>Do you feel depressed or suicidal? Especially those with the fewest resources hold a good ...</p> <a href="60years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                        <div role="tabpanel"  class="tab-pane card-body" id="id5" >
                            <div class="image"><img src="img/services-5.png" alt="image"></div>
                            <div class="content">
                                <p> I’m a Transformative Life Coach who helps Leaders, Entrepreneurs and Solopreneurs have fresh ideas, create...</p> <a href="60years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                         <div role="tabpanel"  class="tab-pane card-body" id="id6" >
                            <div class="image"><img src="img/services-6.png" alt="image"></div>
                            <div class="content">
                                <p>Recovery is the primary goal for people who have experienced trauma, their families, and their care providers.</p> <a href="0to4years.php" class="btn btn-primary">Read More</a></div>
                        </div>
                        <!---->
                    </div>
                </div>
          



                </div>
                <!---->
                <!---->
            </div>
        </div>
    </div>

</section>
<!--         <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">

                        <div class="info text-center"> 
                            <h1> <span>Services </span></h1> </div>
                      
                    
                    </div>
                </div>
             
                <div class="row service-sec">
                
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">

                        <div class="service-box animate_line wow slideInUp"> <img src="img/s1.jpg">
                            <h3 class="text-bg">Life Coach</h3>
                            <p>For years I have been studying and discussing issues involved in raising children...</p><a href="0to4years.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box animate_line one wow slideInUp"> <img src="img/s2.jpg">
                            <h3 class="text-bg">Confidence Booster
</h3>
                            <p>Learn more about parent coaching, what to expect from a parent coaching session and where to find a..</p><a href="0to4years.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box animate_line two wow slideInUp"> <img src="img/s3.jpg">
                            <h3 class="text-bg">Parenting Guide</h3>
                            <p>There has been a revolutionary set of discoveries in the field of psychology that gives people a clear understanding.. ...</p><a href="60years.php">Read More</a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box animate_line three wow slideInUp"> <img src="img/s4.jpg">
                            <h3 class="text-bg">Relationship Enhancer</h3>
                            <p>Do you feel depressed or suicidal? Especially those with the fewest resources hold a good  </p><a href="60years.php">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box animate_line four wow slideInUp">  <img src="img/s5.jpg">
                            <h3 class="text-bg">Wellness Mentor</h3>
                            <p>I’m a Transformative Life Coach who helps Leaders, Entrepreneurs and Solopreneurs have fresh ideas, create... </p><a href="60years.php">Read More</a>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box animate_line animate_line wow slideInUp"> <img src="img/s7.jpg">
                            <h3 class="text-bg">Trauma Recovery</h3>
                            <p>Recovery is the primary goal for people who have experienced trauma, their families, and their care providers.</p><a href="0to4years.php">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
      -->


<section class="quotes">
    
<div id="main">
  <div id="quote-box">
  <blockquote id="text">
  There is no greater illusion than fear,
No greater wrong than preparing to defend yourself, no greater misfortune than having an enemy.
Whoever can see through all fear will always be safe
  <span>Albert Einstein</span>
</blockquote>
<!--     <img style="position: relative;
    float: left;" src="quote-2.png">  <h1 id="text">  There is no greater illusion than fear,
No greater wrong than preparing to defend yourself, no greater misfortune than having an enemy.
Whoever can see through all fear will always be safe</h1> <img style="position: relative;
    float: right;" src="quote-1.png">  
    <h2 id="author">Albert Einstein</h2> -->
  </div>
  <div id="button-wrapper">
    <button id="new-quote"><strong>Generate new quote</strong></button>
     <button id="new-quote"><strong>Share this quote</strong></button>
    <!-- <button><a id="tweet-quote" href="javascript:;"><strong>Share this quote</strong></a></button> -->
  </div>
</div>



</section>


 <section class="clientsay testimonial  wow fadeInUp">
<div class="container">
   <div class="row">
                    <div class="col-12 two-title">

                        <div class="info text-center"> 
                            <h1>What My  <span>Clients Say. </span></h1> </div>
                      
                    
                    </div>
                </div>
    <div class="row client-sec">
       
            <div class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                            </figure>
                        </li>

                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                        <h3>WHAT OUR CLIENTS SAY</h3>
                        
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="quote-wrapper">
                        <div class="video-section">
                        <div class="video-play "> <video width="100%" controls autoplay muted>
  <source src="ramya.mp4" type="video/mp4">
 
</video>     </div>
                        </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="quote-wrapper">
                                    <p>Do we realise we have our own two legs to stand upon and we don't need those crutches? Growing up very independent, ambitious, with a lot of plans - long n short..and all came to a "pause" when marriage happened.</p>
                                    <h3>Nishkala Saravanan</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>One gets to turn inward and make a journey within their self gently with absolute openness. The analogies that she quoted and the open questions she asked created a dimension within oneself to look beyond their accumulated body and mind.</p>
                                    <h3>Gopinath</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Gopinath approached Kamini for help in identifying some perceived confidence issues in his Son Siddarth. Also he felt that Siddarth wasn't placing his best effort or wasn't working to his potential.</p>
                                    <h3>Gopinath R</h3>
                                </div>
                            </div>
                                   <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>While focusing on the child Kamini also noticed that there needed to be a open conversation with Ramya and eventually helped her better understand her own situation.</p>
                                    <h3>Ramya</h3>
                                </div>
                            </div>
                  
                        </div>
                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                    </div>
                </div>
      
      
    </div>
</div>


 </section>























 <!--        <section class="about video-and-testimonials wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                    
                        <div class="info section-title">
                            <h1 class="sec-font">What my <span>Clients Say.</span></h1>
                                                 </div>
                    </div>
                </div>
                <div class="row align">
                    <div class="col-md-5">
                        <div class="video-section">
                            <div class="video-play"> <a href="ramya.mp4" target="_blank">   <img src="img/video-player-play.png" alt="" draggable="false"></a> </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-section">
                            <div class="row ">
                                <div class="col-md-12 col-lg-6 col-sm-12">
                                    <div class="testimonials-box">
                                        <div class="quote-box"> <img src="img/client-sec.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p>Do we realise we have our own two legs to stand upon and we don't need those crutches? Growing up very independent, ambitious, with a lot of plans - long n short..and all came to a "pause" when marriage happened.</p>
                                        </div>
                                        <hr>
                                        <div class="client-info">
                                          
                                            <div class="client-info-box">
                                                <h4>  Nishkala Saravanan</h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-sm-12">
                                    <div class="testimonials-box n-m">
                                        <div class="quote-box"> <img src="img/client-sec.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p>One gets to turn inward and make a journey within their self gently with absolute openness. The analogies that she quoted and the open questions she asked created a dimension within oneself to look beyond their accumulated body and mind. </p>
                                        </div>
                                        <hr>
                                        <div class="client-info">
                                           
                                            <div class="client-info-box">
                                                <h4>Gopinath</h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 none col-sm-12">
                                    <div class="testimonials-box">
                                        <div class="quote-box"> <img src="img/client-sec.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p>Gopinath approached Kamini for help in identifying some perceived confidence issues in his Son Siddarth. Also he felt that Siddarth wasn't placing his best effort or wasn't working to his potential.</p>
                                        </div>
                                        <hr>
                                        <div class="client-info">
                                            
                                            <div class="client-info-box">
                                                <h4>Gopinath R</h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 none col-sm-12">
                                    <div class="testimonials-box">
                                        <div class="quote-box"> <img src="img/client-sec.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p>While focusing on the child Kamini also noticed that there needed to be a open conversation with Ramya and eventually helped her better understand her own situation.</p>
                                        </div>
                                        <hr>
                                        <div class="client-info">
                                           
                                            <div class="client-info-box">
                                                <h4>Ramya</h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
           <section class="about portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class="info section-title">
                            <h1 class="sec-font">My Beautiful <span> Portfolio</span></h1>
                          <!--   <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="projects-slider wow fadeInUp">
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/1.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/2.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/3.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/4.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/5.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <img src="img/projects/6.jpg" alt=""> </div>
                                    <!-- <div class="project-info">
                                        <h3 class="sec-font">Project Name</h3>
                                        <h5 class="project-tag">Design, Branding</h5>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">

        </style>
        <section style="padding-bottom: 10px;" class="about blog wow fadeInUpBig">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <!-- <div class=" section-title-uin"> Latest </div> -->
                        <div class="info section-title">
                            <h1 class="sec-font">My Latest<span> Blog.</span></h1>
                           <!--  <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
    <div class="single-blog-post">
        <div class="entry-thumbnail">
            <a href="/blog-details" class=""><img src="img/blog/29.jpg" alt="image"></a>
        </div>
        <div class="entry-post-content">
            <div class="entry-meta">
                <ul>
               
                    <li>March 30, 2019</li>
                </ul>
            </div>
           <a href="blog.php"> <h3>Siddarth had this to say about his experience with Kamini .</h3></a>
            </div>
    </div>
</div>
              <div class="col-lg-4 col-md-6">
    <div class="single-blog-post">
        <div class="entry-thumbnail">
         <video width="100%" controls autoplay muted>
  <source src="keerty.mp4" type="video/mp4">
 
</video>    
        </div>
        <div class="entry-post-content">
            <div class="entry-meta">
                <ul>
               
                    <li>March 29, 2019</li>
                </ul>
            </div>
           <a href="blog.php"> <h3>Keerthi's thoughts on her experience with Kamini</h3></a>
            </div>
    </div>
</div>
              <div class="col-lg-4 col-md-6">
    <div class="single-blog-post">
        <div class="entry-thumbnail">
            <video width="100%" controls autoplay muted>
  <source src="ramya.mp4" type="video/mp4">
        </div>
        <div class="entry-post-content">
            <div class="entry-meta">
                <ul>
               
                    <li>March 30, 2019</li>
                </ul>
            </div>
           <a href="blog.php"> <h3>Ramya got in touch with Kamini for addressing some of her kids' behavior.</h3></a>
            </div>
    </div>
</div>
                    
                </div>
            </div>
        </section>
        <section class="about contact wow fadeInUpBig">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                      <!--   <div class=" section-title-uin">Appointment </div> -->
                        <div class="info section-title">
                            <h1 class="sec-font">Let's Talk & <span>Get Appointment</span></h1>
                          <br>  <h4><span class="lnr lnr-phone-handset"></span><a href="tel:+91 90031 56757"> +91 90031 56757</a></h4>
                               <h4><span class="lnr lnr-envelope"></span> <a href="mailto:impact@impactatkay.com"> impact@impactatkay.com</a></h4>

                        </div>
                    </div>
                </div>
                <div class="row align">
                    <!-- <div class="col-md-4">
                        <div id="map"></div>
                    </div> -->
                    <div class="col-md-8">
                        <?php echo $result ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6"> <input type="text" name="name" placeholder="Your Name"> </div>
                                <div class="col-md-6"> <input type="text" name="phone" placeholder="Phone Number"> </div>
                                <div class="col-md-6"> <input type="email" name="email" placeholder="Your Email Address"> </div>
                                <div class="col-md-6"> <input type="text" name="subject" placeholder="Subject"> </div>
                                <div class="col-md-12"> <textarea name="message" placeholder="Enter Your Message"></textarea> </div>
                                <div class="col-lg-8 col-md-12">
                                    <p> we all know how important your information is.<br>they are always safe with us.</p>
                                </div>
                                <div class="col-lg-4 col-md-4"> <input name="submit" type="submit" value="Send Message"> </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="col-md-4">
                       <p>+91 90031 56757</p> 
                       <p>transform@kaminiandyou.com</p>
                    </div> -->
                </div>
            </div>
        </section>
  

<script type="text/javascript">
    $(document).ready(function(){
  $(".testimonial .indicators li").click(function(){
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});
</script>
<?php include "footer-2.php" ?>