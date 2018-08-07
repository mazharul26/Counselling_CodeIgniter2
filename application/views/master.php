
<!DOCTYPE html>
<html lang="en">


    <head>
        <title>   <?php
            if (isset($title)) {
                echo$title;
            }
            ?> 
        </title>



        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Therapeutic web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--// Meta tag Keywords -->
        <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <!-- css files -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery-ui.css" /> <!-- Date-script-CSS -->
        <link href="<?php echo base_url() ?>css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
        <!-- //css files -->

        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=ABeeZee:400,400i" rel="stylesheet">
        <!-- //online-fonts -->
        <style> 
            input[name=search] {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('searchicon.png');
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            input[name=search]:focus {
                width: 100%;
            }
        </style>
    </head>
    <body style="background-color:"> 

        <div class="Main-agile">
            <!-- banner -->
            <div class="banner">
                <div class="container">
                    <div class="col-md-4 agile1">
                        <input type="text" name="search" placeholder="Search..">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a href="<?php echo base_url() ?>front/details">About</a>

                                    <a href="<?php echo base_url() ?>">Clients</a>
                                    <a href="<?php echo base_url() ?>">Contact</a>
                                    <a href="<?php echo base_url() ?>">Icon</a>

                                    <a href="<?php echo base_url() ?>">Gallery</a>



                                    <a href="<?php echo base_url() ?>blog">Blog</a>
                                     <a href="<?php echo base_url() ?>blog-view">Blog-View</a>
                                </div>



                                <span style="font-size:30px;cursor:pointer;color: white" onclick="openNav()">&#9776; open</span>

                                <nav class="stroke">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li><a href="<?php echo base_url() ?>">About Us</a></li>

                                        <?php
                                        $type = $this->session->userdata("type");
                                        if ($type == 'p') {
                                            ?>
                                            <li class="dropdown menu__item menu__item--current">



                                                <a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                                <ul class="dropdown-menu">



                                                    <li><a href="<?php echo base_url() ?>profile">Profile</a></li>
                                                    <li><a href="<?php echo base_url() ?>corporate/doctors">Doctors</a></li>
                                                    <li><a href="<?php echo base_url() ?>logout">Logout</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        if ($type == null) {
                                            echo " <li><a href='" . base_url() . "corporate/login'>Sign In</a></li>";
                                        }
                                        ?>

                                        <li class="dropdown menu__item menu__item--current">
                                            <a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url() ?>">Admission</a></li>
                                                <li><a href="<?php echo base_url() ?>laboratory">Laboratory</a></li>
                                                <li><a href="<?php echo base_url() ?>appointment">Appointment</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url() ?>details">Details</a></li>
                                        <li><a href="<?php echo base_url() ?>registration">Registration</a><li> 
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="col-md-4 logo">
                        <div class="logo-w3l">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <h1><a href="<?php echo base_url() ?>">Therapiutic<span>Care For you</span></a></h1>
                    </div>
                    <div class="col-md-4 ph-agile">
                        <p><i class="fa fa-phone" aria-hidden="true"></i><span>+00 28 28 28 85</span></p>
                    </div>
                    <div class="clearfix"> </div>
                    <!-- banner-text -->
                    <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">
                                <li>
                                    <div class="w3layouts-banner-top">
                                        <div class="container">
                                            <div class="agileits-banner-info">
                                                <h3>Best Treatments</h3>
                                                <p>We Provide the Best Counselling Services.</p>
                                            </div>	
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="w3layouts-banner-top">
                                        <div class="container">
                                            <div class="agileits-banner-info">
                                                <h3>We Provide</h3>
                                                <p>Counselling Services that you can Trust.</p>
                                            </div>	
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="w3layouts-banner-top">
                                        <div class="container">
                                            <div class="agileits-banner-info">
                                                <h3>Better Technology</h3>
                                                <p>We Care About Your Health.</p>
                                            </div>	
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>

                        <!-- //banner-text -->
                    </div>

                </div>
                <?php
                if (isset($home)) {
                    require_once 'front/bannar1.php';
                } else {
//            require_once 'front/bannar2.php';
                }
                ?>

            </div>
        </div>


        <!-- //banner -->


        <?php
        if (isset($content)) {
            echo $content;
        }
        ?>
     





        <!-- Footer -->
        <div class="footer w3ls">
            <div class="container">
                <div class="footer-main">
                    <div class="footer-top">
                        <div class="col-md-4 services-grids">
                            <h3>About Us</h3>
                            <ul>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="single.html">Lorem ipsum dolor sit amet, consectetur.</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="single.html">do eiusmod tempor incididunt ut labore.</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="single.html">et dolore magna aliqua.</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="single.html">onec dut quam lscel quam erisque.</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ftr-grid">
                            <div class="logo-fo">
                                <div class="logo-w3l">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                </div>
                                <h2><a href="index.html">Therapeutic<span>Care For you</span></a></h2>
                            </div>
                        </div>
                        <div class="col-md-4 ftr-grid fg2">
                            <h3>Our Address</h3>
                            <div class="ftr-address">
                                <div class="local">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-text">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="ftr-address">
                                <div class="local">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-text">
                                    <p>+1 (512) 154 8176</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="ftr-address">
                                <div class="local">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="right-w3l">
                        <ul class="top-links">
                            <li class="get-w3"><a href="<?php echo base_url() ?>"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Get In Touch</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyrights">
                        <p>&copy; 2018 Therapeutic. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">M.I.-Hospital</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Footer -->

        <!-- js -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
        <!-- //js -->

        <!-- Baneer-js -->

        <script src="<?php echo base_url() ?>js/responsiveslides.min.js"></script>
        <script>
                                    // You can also use "$(window).load(function() {"
                                    $(function () {
                                        // Slideshow 4
                                        $("#slider4").responsiveSlides({
                                            auto: true,
                                            pager: true,
                                            nav: false,
                                            speed: 500,
                                            namespace: "callbacks",
                                            before: function () {
                                                $('.events').append("<li>before event fired.</li>");
                                            },
                                            after: function () {
                                                $('.events').append("<li>after event fired.</li>");
                                            }
                                        });

                                    });
        </script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>


        <!-- //Baneer-js -->

        <!-- Calendar -->
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
            });
        </script>
        <!-- //Calendar -->

        <!-- Time -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/wickedpicker.js"></script>
        <script type="text/javascript">
            $('.timepicker').wickedpicker({twentyFour: false});
        </script>
        <!-- //Time -->

        <!-- jarallax-js -->
        <script src="<?php echo base_url() ?>js/jarallax.js"></script>
        <script src="<?php echo base_url() ?>js/SmoothScroll.min.js"></script>
        <script type="text/javascript">
            /* init Jarallax */
            $('.jarallax').jarallax({
                speed: 0.5,
                imgWidth: 1366,
                imgHeight: 768
            })
        </script>
        <!-- //jarallax-js -->

        <!-- for-Testimonials -->
        <!-- required-js-files-->
        <link href="<?php echo base_url() ?>css/owl.carousel.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>
        <!--//required-js-files-->
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <!-- //for-Testimonials -->

        <!-- //js-scripts -->
    </body>
</html>