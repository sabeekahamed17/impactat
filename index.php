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

      $result="<a href='javascri
      pt:;' class='alert alert-success'>Thank you for your enquiry. We will get you shortly !!!</a>";
   
     
    }else{
         $result="<a href='javascript:;' class='alert alert-danger'>Try later</a>";
        
    }

}

 ?>
<style>
.btn-blue {
    padding: 15px 35px;
    background: #1a73e8;
    color: #fff
}

.btn-blue:hover {
    background: #185abc;
    color: #94abff
}

section.p-b {
    padding: 100px 0 0 0
}

@media (min-width: 998px) {
    iframe {
        width: 600px;
        height: 355px;
    }

    .text-right-button {
        text-align: right
    }

}

iframe.g-review {
    width: 100%;
    border: none;
    height: 280px
}
</style>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<div class="content homeslider">
    <section class="home-prticles-with-typed">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                </div>
                <div class="col-md-5">
                    <div class="hero-section">

                        <div class="section-hero-content">

                            <a class="ds" href="index.php"> <img style="position: relative; bottom: 50px; width: 180px;"
                                    src="img/final-logo.png"></a>

                            <h1>Hello I'm <span>Kamini</span></h1>
                            <a href="solutions.php" class="sec-font btn theme-btn">Let's Start <span
                                    class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="col-12">
                <div class="section-title-uin"> About Me </div>
            </div>
            <div class="row" style="align-items: center;">
                <div class="col-md-5">
                    <div class="my-img-box wow slideInLeft">
                        <div class="my-img"> <img src="img/my-img-1.jpg" alt="" draggable="false" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="info wow slideInRight">
                        <h1>HELLO, <span> I'M Kamini </span></h1>
                        <h5>Transformative <span> Coaching </span></h5>
                        <p>Coaching high-impactful individuals to reach their next level, no matter how successful,
                            famous, or wealthy they are. There is a HUGE demand and need for transformative coaching to
                            serve leaders and those who are passionate to impact the world and build their legacy. This
                            is not just limited to CEOs and C-level executives. Entrepreneurs, community leaders,
                            celebrities, artists, athletes and
                            other high-performing individuals also recognize the need of coaches to boost their
                            performance and growth. And with me as your Coach, this will be the opportunity for you
                            to be a highly motivated individual or group. There are two elements to transformative
                            Coaching which can consistently achieve deep connection and transformation for any
                            individual.</p>
                        <!-- <p>Coaching high-impactful individuals to reach their next level, no matter how successful,
                            famous, or wealthy they are. There is a HUGE demand and need for transformative coaching to
                            serve leaders and those who are passionate to impact the world and build their legacy. This
                            is not just limited to CEOs and C-level exe<span id="dots">...</span><span
                                id="more">cutives. Entrepreneurs, community leaders, celebrities, artists, athletes and
                                other high-performing individuals also recognize the need of coaches to boost their
                                performance and growth. And with me as your Coach, this will be the opportunity for you
                                to be a highly motivated individual or group. There are two elements to transformative
                                Coaching which can consistently achieve deep connection and transformation for any
                                individual.</span> </p>
                        <p onclick="myFunctionn()" id="myBtn">Read more</p> -->


                    </div>
                </div>
                <div class="col-md-7">
                    <div class="info wow slideInRight">
                        <div>
                            <h5>The <span> Science </span></h5>
                            <p>It is understanding the specific, reliable, scientific and universal principles of how
                                human
                                beings work.

                            </p>
                        </div>
                        <div class="pt-3">
                            <h5>The <span> Art </span></h5>
                            <p>This is developed over time, and every individual expresses it differently. While copying
                                others’ techniques is a good part of the learning process initially, relying on them
                                forever
                                will hold you back from waking up to your infinite creative potential as a Leader and/or
                                Trend setter.</p>
                        </div>


                    </div>
                </div>
                <div class="col-md-5">
                    <div class="my-img-box wow slideInLeft">
                        <div class="my-img"> <img src="img/my-img.jpg" alt="" draggable="false" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 pt-5">
                <div class="info">
                    <h1> <span>MY </span>ACHIEVEMENTS</h1>
                    <ul class="row text-center pt-4">
                        <li class="col-lg-4 col-md-4 col-sm-12">
                            <div class="about-box">
                                <h3>7000+</h3>
                                <h4 class="sec-font">Hours</h4>
                                <p>Practising and learning on the best tools and methods to help people understand and
                                    help themselves.</p>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-12">
                            <div class="about-box">
                                <h3>300+</h3>
                                <h4 class="sec-font">Kids</h4>
                                <p>I have worked with well over 300 kids and their parents helping them take more
                                    control of their lives.</p>
                            </div>
                        </li>
                        <li style="border: none;" class="col-lg-4 col-md-4 col-sm-12">
                            <div class="about-box bn">
                                <h3>10+</h3>
                                <h4 class="sec-font">years of experience</h4>
                                <p>In Life Coaching, Confidence Boosting, Parenting Guidance, Relationship Enhancing,
                                    Wellness Mentoring, Trauma Recovery, Anger Management.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <img src="images/1.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/2.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/3.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/4.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/5.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/6.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/7.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/8.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/9.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <img src="images/10.png" alt="">
                    </div>
                </div>
            </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i
                    style="font-size: 1.2rem;padding: 12px;" class='fa fa-arrow-left'></i> </a> <a
                class="carousel-control-next" href="#demo" data-slide="next"> <i
                    style="font-size: 1.2rem;padding: 12px;" class='fa fa-arrow-right'></i> </a>
        </div>
    </div>


    <!-- <section class="services">
        <div class="container">
            <div class="row align">
                <div class="col-12 two-title">
                    <div class="white section-title-uin"> Services </div><br><br>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box wow slideInUp"> <img src="img/s1.jpg">
                        <h3 class="text-bg">Life Coach</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box two wow slideInUp"> <img src="img/s2.jpg">
                        <h3 class="text-bg">Confidence Booster
                        </h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box wow slideInUp"> <img src="img/s3.jpg">
                        <h3 class="text-bg">Parenting Guide</h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box two wow slideInUp"> <img src="img/s4.jpg">
                        <h3 class="text-bg">Relationship Enhancer</h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box wow slideInUp"> <img src="img/s5.jpg">
                        <h3 class="text-bg">Wellness Mentor</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12 text-center">
                    <div class="service-box two wow slideInUp"> <img src="img/s7.jpg">
                        <h3 class="text-bg">Trauma Recovery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="quotes">
        <div id="main">
            <div id="quote-box">
                <img style="position: relative;
    float: left;" src="quote-2.png">
                <h1 id="text"> There is no greater illusion than fear,
                    No greater wrong than preparing to defend yourself, no greater misfortune than having an enemy.
                    Whoever can see through all fear will always be safe</h1> <img style="position: relative;
    float: right;" src="quote-1.png">
                <h2 id="author">Albert Einstein</h2>
            </div>
            <div id="button-wrapper">
                <button id="new-quote"><strong>Generate new quote</strong></button>
                <button id="new-quote"><strong>Share this quote</strong></button>
            </div>
        </div>
    </section> -->



    <div class="spacer2"></div>
    <div class="spacer"></div>


    <div class="sd_master_wrapper">	
        <div class="slideshow">
            
            <div class="content"> <!-- slide 1 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5" >“When you see something beautiful in someone, tell them. It may take a second to say, but for them it could last a lifetime.” </h1> 
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content"> <!-- slide 2 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">“Knowledge is what you think is true. Wisdom is what you know is false. Realization is knowing the Truth.”</h1> 
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content d-flex"> <!-- slide 3 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">“The difference between who you are and who you want to be is what you do.”</h1> 
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content"> <!-- slide 4 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent">
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">“ You will never have this day again. So make it count.” </h1>
                        </div>	
                    </div>
                </div>
            </div>

            <div class="content d-flex"> <!-- slide 5 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"Look for something positive in every day, even if some days you have to look a little harder."</h1> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="content d-flex"> <!-- slide 6 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"Change your thoughts and you change your world."</h1> 
                        </div>
                    </div>
                </div>
            </div>


            <div class="content d-flex"> <!-- slide 7 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"Always remember that you are absolutely unique. Just like everyone else."</h1> 
                        </div>
                    </div>
                </div>
            </div>



            <div class="content d-flex"> <!-- slide 8 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"Love yourself first and everything else falls into line. You really have to love yourself to get anything done in this world."</h1> 
                        </div>
                    </div>
                </div>
            </div>


            <div class="content d-flex"> <!-- slide 9 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"If I cannot do great things, I can do small things in a great way."</h1> 
                        </div>
                    </div>
                </div>
            </div>


            <div class="content d-flex"> <!-- slide 10 -->
                
                <div class="btnNtxt"> 
                    <div class="sdAllContent"> 
                        
                        <div class="sd_scroll  mt-5">
                        <h1 class="sdCustomSliderHeadig mt-5">"That is one good thing about this world ... there are always sure to be more springs."</h1> 
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>	
    <div class="spacer"></div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 two-title">
                    <!-- <div class=" section-title-uin"> YouTube Presence </div> -->
                    <div class="section-title">
                        <h2 class="sec-font">YouTube Presence</h2>
                        <!--   <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/GyibGX-hMZg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial about">
        <div class="container">
            <div class="row">
                <div class="col-12 two-title">
                    <div class=" section-title-uin"> Testimonials </div>
                    <div class="section-title">
                        <h2 class="sec-font">What my Clients Say.</h2>
                        <!--   <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                    </div>
                </div>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>    -->
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <!-- <div class="img-box"><img src="images/team.jpg" alt=""></div> -->
                        <p style="height: 100px;margin-top: 50px;" class="testimonial">Do we realise we have our own two
                            legs to stand upon and we don't need those crutches? Growing up very independent, ambitious,
                            with a lot of plans - long n short..and all came to a "pause" when marriage happened.</p>
                        <p class="overview"><b>Nishkala Saravanan</b></p>
                        <!-- <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
            </div> -->
                    </div>
                    <div class="item carousel-item">
                        <p style="height: 100px;margin-top: 50px;" class="testimonial">One gets to turn inward and make
                            a journey within their self gently with absolute openness. The analogies that she quoted and
                            the open questions she asked created a dimension within oneself to look beyond their
                            accumulated body and mind.</p>
                        <p class="overview"><b>Gopinath</b></p>
                        <!--    <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
            </div> -->
                    </div>
                    <div class="item carousel-item">
                        <p style="height: 100px;margin-top: 50px;" class="testimonial">Gopinath approached Kamini for
                            help in identifying some perceived confidence issues in his Son Siddarth. Also he felt that
                            Siddarth wasn't placing his best effort or wasn't working to his potential.</p>
                        <p class="overview"><b>Gopinath R</b></p>

                    </div>
                    <div class="item carousel-item">
                        <p style="height: 100px;margin-top: 50px;" class="testimonial">While focusing on the child
                            Kamini also noticed that there needed to be a open conversation with Ramya and eventually
                            helped her better understand her own situation.</p>
                        <p class="overview"><b>Ramya</b></p>

                    </div>

                    <div class="col text-center-button a11">
                        <a class="btn btn-blue"
                            href="https://www.google.com/search?q=impactatkay&rlz=1C1ONGR_enIN1029IN1029&oq=impactatk&aqs=chrome.0.0i355i512j46i175i199i512j69i57j69i60l2j69i61.10143j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3a525d77e6413f49:0xe4cfb2a96d7b51e9,1,,,"
                            target="_blank">View All
                            Reviews</a>
                    </div>

                    <!-- <div class="item carousel-item">
             <iframe width="650" height="355" src="https://www.youtube.com/embed/GyibGX-hMZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </div>       -->
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>


            </div>
        </div>
    </section>
    <!--      <section class="video-and-testimonials wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class=" section-title-uin"> Testimonials </div>
                        <div class="section-title">
                            <h2 class="sec-font">What my Clients Say.</h2>
                          
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
                                        <div class="quote-box"> <img src="img/quote.png" alt="" draggable="false"> </div>
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
                                        <div class="quote-box"> <img src="img/quote.png" alt="" draggable="false"> </div>
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
                                        <div class="quote-box"> <img src="img/quote.png" alt="" draggable="false"> </div>
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
                                        <div class="quote-box"> <img src="img/quote.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p>While focusing on the child Kamini also noticed that there needed to be a open conversation with Ramya and eventually helped her better understand her own situation</p>
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
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 two-title">
                    <div class=" section-title-uin"> Portfolio </div>
                    <div class="section-title">
                        <h2 class="sec-font">Portfolio</h2>
                        <!--   <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="projects-slider wow fadeInUp">
                        <!-- <div class="item">
                            <div class="project-box">
                                <div class="project-img"> <img src="img/projects/3.jpg" alt=""> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-box">
                                <div class="project-img"> <img src="img/projects/3.jpg" alt=""> </div>
                            </div>
                        </div> -->
                        <div class="item">
                            <div class="project-box">
                                <div class="project-img"> <img src="img/projects/3.jpg" alt=""> </div>
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
    <section style="padding-bottom: 10px;" class="blog wow fadeInUpBig">
        <div class="container">
            <div class="row">
                <div class="col-12 two-title pb-3">
                    <div class=" section-title-uin">Latest Videos</div>
                    <div class="section-title">
                        <h2 class="sec-font">Video Testimonials</h2>
                        <!--  <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-body">

                        <div class="blog-img">
                            <video width="100%" controls autoplay muted>
                                <source src="keerty.mp4" type="video/mp4">

                            </video>

                            <!-- <img src="img/blog/30.jpg" alt="" draggable="false" class="img-fluid">  -->
                        </div>

                    </div>
                    <div class="post-info">
                        <div class="post-date">March 29, 2019</div><a href="blog.php">
                            <h4 class="blog-item-title">Keerthi's thoughts on her experience with Kamini</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-body">

                        <div class="blog-img"><video width="100%" controls autoplay muted>
                                <source src="ramya.mp4" type="video/mp4">

                            </video> <!-- <img src="img/blog/31.jpg" alt="" draggable="false" class="img-fluid"> -->
                        </div>

                    </div>
                    <div class="post-info1">
                        <div class="post-date post-date1">March 1, 2019</div><a href="blog.php">
                            <h4 class="blog-item-title">Ramya got in touch with Kamini for addressing some of her
                                kids' behavior. </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                        class="crt-logo crt-tag">Powered by Curator.io</a></div>
                <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                <script type="text/javascript">
                /* curator-feed-default-feed-layout */
                (function() {
                    var i, e, d = document,
                        s = "script";
                    i = d.createElement("script");
                    i.async = 1;
                    i.charset = "UTF-8";
                    i.src = "https://cdn.curator.io/published/a1ea1440-b77f-4bf7-8e2b-aaf4644c3c94.js";
                    e = d.getElementsByTagName(s)[0];
                    e.parentNode.insertBefore(i, e);
                })();
                </script>
            </div>
        </div>

    </section>

    <!-- <section class="insta1">
        <div class="row">
            <div class="col-lg-12">
                <img src="images/insta1.png" alt="" >
            </div>
        </div>
    </section> -->


    <!-- <section class="p-b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>What Our Customer Say</h2>
                </div>
                <div class="col-md-6 text-right-button">
                    <a class="btn btn-blue" href="https://goo.gl/maps/i7ZZo35i7TaJzUT88" target="_blank">View All
                        Reviews</a>
                </div>
                <div class="col-md-12">
                <script defer async src='https://cdn.trustindex.io/loader.js?e034d2b108a9137f85266efe809'></script>
                </div>
            </div>
        </div>
    </section> -->



    <section class="contact wow fadeInUpBig">
        <div class="container">
            <div class="row">
                <div class="col-12 two-title">
                    <div class="section-title-uin section-title-uin-app">Appointment </div>
                    <div class="section-title">
                        <h2 class="sec-font">Let's Talk & Get Appointment</h2>
                        <br>
                        <h6><span class="lnr lnr-phone-handset"></span><a href="tel:+91 90031 56757"> +91 90031
                                56757</a></h6>
                        <h6><span class="lnr lnr-envelope"></span> <a href="mailto:impact@impactatkay.com">
                                impact@impactatkay.com</a></h6>

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
                            <div class="col-md-6"> <input type="email" name="email" placeholder="Your Email Address">
                            </div>
                            <div class="col-md-6"> <input type="text" name="subject" placeholder="Subject"> </div>
                            <div class="col-md-12"> <textarea name="message"
                                    placeholder="Enter Your Message"></textarea> </div>
                            <div class="col-lg-8 col-md-12">
                                <p> we all know how important your information is.<br>they are always safe with us.</p>
                            </div>
                            <div class="col-lg-4 col-md-4"> <input name="submit" type="submit" value="Send Message">
                            </div>
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


    <script>
        jQuery(document).ready(function($){
	var $slickElement = $('.slideshow');

	$slickElement.slick({
	  autoplay: true,
	  dots: false,
	});

});
</script>

    <?php include "footer-1.php" ?>

    <script async custom-element='amp-iframe' src='https://cdn.ampproject.org/v0/amp-iframe-0.1.js'></script>