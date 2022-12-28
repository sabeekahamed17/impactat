  <?php include "header.php" ?>

<section class="about hero">
  <div class="container">

<div class="row">
  <div class="col-md-12">
<div class="info wow slideInRight">
               <h1> <span> LATEST </span>VLOG</h1>
              <h2 style="text-align: left;"> Transformative Coaching Conversations Series..</h2><br>
            </div>
        </div>
<div class="col-md-4">
  <iframe width="100%" height="250" src="https://www.youtube.com/embed/y1y8Te3_QSA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
 <div class="col-md-4">
 <iframe width="100%" height="250" src="https://www.youtube.com/embed/juInOedf4VE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
 <iframe width="100%" height="250" src="https://www.youtube.com/embed/pZTLBsMVN6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
 <iframe width="100%" height="250" src="https://www.youtube.com/embed/_FTYxb3GzmI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
<iframe width="100%" height="250" src="https://www.youtube.com/embed/sY5pWuJaRMA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<div class="col-md-4">
<iframe width="100%" height="250" src="https://www.youtube.com/embed/uAVHnKAGpAY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
  <iframe width="100%" height="250" src="https://www.youtube.com/embed/kIhZBtcZlnQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
  <iframe width="100%" height="250" src="https://www.youtube.com/embed/O2Wpawr66H0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4">
  <iframe width="100%" height="250" src="https://www.youtube.com/embed/RkjAsZWZabU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="col-md-4">
<iframe width="100%" height="250" src="https://www.youtube.com/embed/PQGX0zbnasw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="col-md-4">
<iframe width="100%" height="250" src="https://www.youtube.com/embed/0JWPGE-ELUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="col-md-4">
<iframe width="100%" height="250" src="https://www.youtube.com/embed/QQKC6zWJNok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<!-- <div class="row">
  <div class="col-md-12">
<div class="info wow slideInRight">
               <h1> <span> LATEST </span>BLOG</h1>
              
            </div>
        </div>
     




</div> -->





</div>
</section>




  <?php include "footer-1.php" ?>






<script type="text/javascript">
  function toggleExpand(e){
e.parentElement.classList.toggle('expanded');
}
</script>










  <style type="text/css">
    .card{
  margin: 1% 0% 0% 3.5%;
  height: 330px;
  border-radius: 2px;
  position: relative;
  background: #4afcfe;
  box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
  float: left;
  z-index: 0;
  transition: width 0.1s linear;
}

@media only screen and (min-width: 1000px) {
    .card {
        width: 45%;
    }
}

@media only screen and (max-width: 999px) {
    .card {
      width: 96%;
      margin: 10px 2%;
    }
  .expanded > .card-image{
    max-height: 35%;
  }
}

.right{
  float: right;
  margin-right: 3%;
  transform-origin: right;
}

.expanded {
    box-shadow: none;
    position: fixed;
    width: 87%;
    height: 490px;
    overflow: hidden;
    overflow-x: hidden;
    z-index: 99;
    margin: 0px;
    transition: width 0.3s ease, height 0.5s 0.2s ease;
}

.expanded .right{
  right: 0px;
}


.card-control{
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #444;
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
  position: absolute;
  right: 20px;
  bottom: 20px;
  border: 0px;
  cursor: pointer;
  outline: none;
}

.card-control:before{
  content: '';
  height: 2px;
  background: white;
  width: 60%;
  position: absolute;
  left: 20%;
  top: 50%;
  transform: rotate(0deg);
  -webkit-tap-highlight-color: transparent;
  transition: transform 0.6s ease-in-out, width 0.2s ease-in-out, top 0.1s linear, left 0.5s linear, right 0.5s linear;
}

.card-control:after{
  content: '';
  height: 2px;
  background: white;
  width: 60%;
  position: absolute;
  left: 20%;
  top: 50%;
  transform: rotate(90deg);
  transition: transform 0.6s ease-in-out, width 0.2s ease-in-out, top 0.1s linear, right 0.5s linear;
}

.expanded > .card-control{
  bottom: 85%;
  transition: bottom 0.3s 0.1s ease;
}

.expanded > .card-control:before{
  position: absolute;
  right: 15px;
  top: 22px;
  transform: rotate(180deg);
}

.expanded > .card-control:after{
  position: absolute;
  right: 15px;
  top: 24px;
  transform: rotate(360deg);
}
.card-image{
  width: 100%;
  max-height: 60%;
  overflow: hidden;
}

.expanded > .card-image{
  max-height: 35%;
}
.card-image img{
  width: 100%;
}

.card-desc{
  font-family: 'Source Serif Pro', serif;
  font-weight: 400;
  margin: 2% 1%;
  Overflow: auto;
}

.card-desc-head{
  font-size: 22px;
  padding: 0px;
  margin: 0px;
  font-weight: 600;
}

.expanded > .card-desc > .card-desc-head{
    position: absolute;
    top: 20%;
    background: white;
    padding: 5px;
}

@media only screen and (max-width: 999px) {
    .expanded > .card-desc > .card-desc-head{
      position: absolute;
      top: 20%;
      font-size: 2.5vh;
      width: 80%;
    }
}

.expanded > .card-desc >  .article{
  overflow-y: scroll;
  height: 60%;
  width: 100%;
  position: absolute;
  bottom: 10px;
}

.card-desc-peak{
  color: #333;
  width: 80%;
  margin: 5px 0px;
  font-size: 14px;
  height: 36px;
  display: inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-family: 'Source Sans Pro', sans-serif;
}

.expanded > .card-desc > .article > .card-desc-peak{
  height: auto;
  word-spacing: normal;
  text-overflow: inherit;
  white-space: normal;
  font-size: 18px;
  height: auto;
  white-space: normal;
  width: 96%;
  margin: 0px 2%;
  -webkit-animation: text-appear 0.5s ease;
}

@keyframes text-appear{
  0%{opacity: 0}
  50%{opacity: 0; position: relative; top: 10px;}
  100%{opacity: 1; position: relative; top: 0px;}
}
.hero {
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
    /* flex-direction: column; */
    /* height: 100%; */
    /* background-color: #1b557a !important; */
    background-image: url(img/cloud.png);
    background-repeat: no-repeat;
    font-family: "Montserrat", sans-serif;
    text-align: center;
    animation: marquee 30s infinite linear;
}
.hero h1, .hero p {
  color: #fff;
  text-shadow: 0 0px 10px rgba(0, 0, 0, 0.2);
}
.hero h1 {
  font-size: 60px;
  margin-bottom: 20px;
}
@media (max-width: 550px) {
  .hero h1 {
    font-size: 40px;
  }
}
@media (max-width: 400px) {
  .hero h1 {
    font-size: 30px;
  }
}
@media (max-width: 400px) {
  .hero p {
    font-size: 12px;
  }
}
.hero code {
  padding: 4px;
  background-color: #333;
  border-radius: 5px;
}

@keyframes marquee {
  0% {
    background-position: 0;
  }
  100% {
    background-position: -1190px;
  }
}





  </style>