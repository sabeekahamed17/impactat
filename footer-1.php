    <!-- Sticky Social Media  -->
    <div class="sticky-social mobile-show">
        <ul class="social">
            <li class="fb"><a href="https://www.facebook.com/impactatkay" target="_blank"><i class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
            <li class="twitter"><a href="https://twitter.com/KAYsCoaching" target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li class="fb"><a href="https://www.instagram.com/impactatkay/" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <!-- End Sticky Social Media  -->
    <button class="top" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© <?php echo date("Y"); ?> Kamini And You. All Rights Reserved | Designed by <a
                            href="https://www.eon8.com/" target="_blank">Eon8</a> </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    

    <!-- Sticky Contact  -->
    <div class="sidebar-contact">
        <div class="toggle"></div>
        <h4>Get Appointment</h4>
        <div class="scroll">
            <form method="post">
                <div class="row">
                    <div class="col-md-6"> <input type="text" name="name" placeholder="Your Name"> </div>
                    <div class="col-md-6"> <input type="text" name="phone" placeholder="Your Mobile Number"> </div>
                    <div class="col-md-6"> <input type="text" name="email" placeholder="Your Email Id"> </div>
                    <div class="col-md-6"> <input type="text" name="add" placeholder="Your Address"> </div>


                    <div class="col-md-12"> <textarea name="message" placeholder="Enter Your subject"></textarea> </div>

                    <div class="col-lg-4 col-md-4"> <input style="background: #4afcfe;color: #000" type="submit"
                            name="submit" value="Send Message"> </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Sticky Contact  -->


    <style>
.call-image {
    background: rgba(0, 0, 0, 0) !important;
    position: fixed;
    width: 200px;
    height: auto;
    bottom: 80px;
    left: 20px;
    border-radius: 50px;
    z-index: 100;
    animation: jumpin 2.5s infinite;
}

.call-image img {
    background: rgba(0, 0, 0, 0) !important;
    width: 200px;
    height: auto;
    z-index: 100;
    bottom: 80px;

}

@keyframes jumpin {
    0% {
        bottom: 70;
    }

    50% {
        bottom: 80px;
    }

    55% {
        bottom: 82px;
        border-radius: 70px / 60px;
    }

    65% {
        bottom: 90px;
        border-radius: 70px;
    }

    95% {
        bottom: 80;
    }

    100% {
        bottom: 80;
    }
}

.sticky-image {
    background: rgba(0, 0, 0, 0) !important;
    position: fixed;
    width: 250px;
    height: auto;
    bottom: 20px;
    right: 20px;
    border-radius: 50px;
    z-index: 100;
    animation: jump 2.5s infinite;
}

@keyframes jump {
    0% {
        bottom: 0;
    }

    50% {
        bottom: 10px;
    }

    55% {
        bottom: 20px;
        border-radius: 70px / 60px;
    }

    65% {
        bottom: 20px;
        border-radius: 70px;
    }

    95% {
        bottom: 0;
    }

    100% {
        bottom: 0;
    }
}

#more {
    display: none;
}

p#myBtn {
    font-weight: 600;
    text-decoration: underline;
    cursor: pointer;
}

@media (max-width: 767px) {

   .web-show{
    display: none;
   }
   .sticky-social{
    position: relative;
   }
   .social li {
    display: inline-block;
    padding: 5px 15px;
    margin: 0px 5px 30px;
}
   .social {
    list-style: none;
    display: flex;
    justify-content: center;
}
.sidebar-contact .toggle{
  display: none;
}
.social li:hover {
    margin-right: 0;
    box-shadow: 2px 5px 10px grey;
}

}
@media (min-width: 768px) {
  .mobile-show{
    display: none;
   }

}
    </style>

    <a href="https://api.whatsapp.com/send?l=en&text=Hi!%20I%27m%20interested%20in%20one%20of%20your%20services.&phone=919150584431"
        target="_blank"><img src="images/whatsapp-sticky.png" class="sticky-image" /></a>

<!-- Sticky Social Media  -->
<div class="sticky-social web-show">
        <ul class="social">
            <li class="fb"><a href="https://www.facebook.com/impactatkay" target="_blank"><i class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
            <li class="twitter"><a href="https://twitter.com/KAYsCoaching" target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li class="fb"><a href="https://www.instagram.com/impactatkay/" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <!-- End Sticky Social Media  -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typed.js"></script>

    <!--     <script src="js/gmaps.js"></script>
 -->
    <!--   <script src="js/particles.min.js"></script> -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


    <script type="text/javascript">
new WOW().init();

const quotes = [{
        author: "-Albert Einstein",
        quote: "When you see Something beautiful in someone, tell them. It may take a second to say, but for them it could last a lifetime"
    },
    {
        author: "-Jack Handey",
        quote: "Knowledge is what you think is true, wisdom is what you know is false, Realization is knowing the Truth..."
    },
    {
        author: "-Groucho Marx",
        quote: "The Difference between who you are and who you want to be is what you do."
    },
    {
        author: "-George Carlin",
        quote: "If it excites you and scares you at the same time, it problably means you should do it"
    },
    {
        author: "-W C Fields",
        quote: "Make you have the courage to break the patterns in your life that are no longer serving you."
    },
    {
        author: "-Roger Staubach",
        quote: "You will never have this day again. So make it Count."
    }
];

//this function determines which quote is displayed currently by getting the author and matching it to an index of an obj in quotes array, and then increments index by 1 and returns new quote
$(document).ready(function() {
    var currentQuote = quotes[0].quote + quotes[0].author;
    var qindex = 0;
    $("#new-quote").click(function() {
        if (quotes.length > qindex) {
            if (quotes[qindex].quote) {
                $("#text").text(quotes[qindex].quote);
            }
            ++qindex;
        } else {
            qindex = 0

        }
    });

    $("#tweet-quote").click(function() {
        window.open('https://twitter.com/intent/tweet/?text=' + $("#text").text());
    });
});
    </script>
    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
    </script>



    <script type="text/javascript">
$(document).ready(function() {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query       
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
});
    </script>

    <script>
/* 
Ace Responsive Menu Plugin
Version: 1.0
Author: Samson.Onna 
Email : samson3d@gmail.com
----------------------------------------*/

(function($) {
    $.fn.aceResponsiveMenu = function(options) {

        //plugin's default options
        var defaults = {
            resizeWidth: '768',
            animationSpeed: 'fast',
            accoridonExpAll: false
        };

        //Variables
        var options = $.extend(defaults, options),
            opt = options,
            $resizeWidth = opt.resizeWidth,
            $animationSpeed = opt.animationSpeed,
            $expandAll = opt.accoridonExpAll,
            $aceMenu = $(this),
            $menuStyle = $(this).attr('data-menu-style');

        // Initilizing        
        $aceMenu.find('ul').addClass("sub-menu");
        $aceMenu.find('ul').siblings('a').append('<span class="arrow "></span>');
        if ($menuStyle == 'accordion') {
            $(this).addClass('collapse');
        }

        // Window resize on menu breakpoint 
        if ($(window).innerWidth() <= $resizeWidth) {
            menuCollapse();
        }
        $(window).resize(function() {
            menuCollapse();
        });

        // Menu Toggle
        function menuCollapse() {
            var w = $(window).innerWidth();
            if (w <= $resizeWidth) {
                $aceMenu.find('li.menu-active').removeClass('menu-active');
                $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                $aceMenu.addClass('collapse hide-menu');
                $aceMenu.attr('data-menu-style', '');
                $('.menu-toggle').show();
            } else {
                $aceMenu.attr('data-menu-style', $menuStyle);
                $aceMenu.removeClass('collapse hide-menu').removeAttr('style');
                $('.menu-toggle').hide();
                if ($aceMenu.attr('data-menu-style') == 'accordion') {
                    $aceMenu.addClass('collapse');
                    return;
                }
                $aceMenu.find('li.menu-active').removeClass('menu-active');
                $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
            }
        }

        //ToggleBtn Click
        $('#menu-btn').click(function() {
            $aceMenu.slideToggle().toggleClass('hide-menu');
        });


        // Main function 
        return this.each(function() {
            // Function for Horizontal menu on mouseenter
            $aceMenu.on('mouseover', '> li a', function() {
                if ($aceMenu.hasClass('collapse') === true) {
                    return false;
                }
                $(this).off('click', '> li a');
                $(this).parent('li').siblings().children('.sub-menu').stop(true, true).slideUp(
                    $animationSpeed).removeClass('slide').removeAttr('style').stop();
                $(this).parent().addClass('menu-active').children('.sub-menu').slideDown(
                    $animationSpeed).addClass('slide');
                return;
            });
            $aceMenu.on('mouseleave', 'li', function() {
                if ($aceMenu.hasClass('collapse') === true) {
                    return false;
                }
                $(this).off('click', '> li a');
                $(this).removeClass('menu-active');
                $(this).children('ul.sub-menu').stop(true, true).slideUp($animationSpeed)
                    .removeClass('slide').removeAttr('style');
                return;
            });
            //End of Horizontal menu function

            // Function for Vertical/Responsive Menu on mouse click
            $aceMenu.on('click', '> li a', function() {
                if ($aceMenu.hasClass('collapse') === false) {
                    //return false;
                }
                $(this).off('mouseover', '> li a');
                if ($(this).parent().hasClass('menu-active')) {
                    $(this).parent().children('.sub-menu').slideUp().removeClass('slide');
                    $(this).parent().removeClass('menu-active');
                } else {
                    if ($expandAll == true) {
                        $(this).parent().addClass('menu-active').children('.sub-menu')
                            .slideDown($animationSpeed).addClass('slide');
                        return;
                    }
                    $(this).parent().siblings().removeClass('menu-active');
                    $(this).parent('li').siblings().children('.sub-menu').slideUp().removeClass(
                        'slide');
                    $(this).parent().addClass('menu-active').children('.sub-menu').slideDown(
                        $animationSpeed).addClass('slide');
                }
            });
            //End of responsive menu function

        });
        //End of Main function
    }
})(jQuery);
    </script>

    <!-- Side Sticky End  -->
    <script>
$(document).ready(function() {
    $('.toggle').click(function() {
        $('.sidebar-contact').toggleClass('active')
        $('.toggle').toggleClass('active')
    })
})
    </script>
    <script type="">

        $(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            header.addClass("scrolled");//document.getElementById("div1").className = " newClass"
        } else {
            header.removeClass("scrolled");
        }
    });
  
});

</script>
    <script type="text/javascript">
function myFunctionn() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
    </script>
    <script type="text/javascript">
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true
    });
});
    </script>
    </body>

    </html>