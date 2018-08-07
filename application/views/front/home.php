


<!-- main -->
<!-- About --> 
<div id="about" class="welcome"> 
    <div class="container">
        <div class="agile-title">
            <h3> Here Our Specialist Doctor<span></span></h3> 
        </div>
        <div class="w3ls-row">
            <div class="col-md-6 welcome-left">
                <div class="welcome-img">

                    <img src="<?php echo base_url() ?>images/img1.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
<br/><br/>
                <?php
                foreach ($allhome[0] as $home) {
                    ?>
<h3 style="text-align: left"><a href="<?php echo base_url().  Replace($home->dsname)."/$home->id" ?>"><?php echo $home->dsname ?> <small>(<?php echo $home->total;  ?>)</small></a></h3>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-6 welcome-right"> 
                <div class="open-hours-row">
                    <div class="col-md-3 open-hours-left">
                        <h4>OPENING HOURS </h4>
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>Every Day</h6>
                        <h5>7am - 12am</h5> 
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>Sunday</h6>
                        <h5>10am - 1pm</h5> 
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>Night Time</h6>
                        <h5>12am - 9am</h5> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="<?php echo base_url() ?>images/img2.jpg" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="<?php echo base_url() ?>images/img3.jpg" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div> 
    </div>
</div>
<!-- //About --> 

<!-- what-we-do -->
<div class="tips w3agile">
    <div class="container">
        <h3 class="tittle-one">What We Do <span></span></h3>
        <div class="tip-grids">
            <div class="col-md-6 tip-grid">
                <figure class="effect-julia">
                    <img src="<?php echo base_url() ?>images/w1.jpg" alt="">
                    <figcaption>
                        <h4>Best Treatments</h4>
                        <p>We Provide the Best Medical Services.</p>
                        <p>Medical Services that you can Trust.</p>
                        <p>We Care About Your Health.</p>
                    </figcaption>			
                </figure>
            </div>
            <div class="col-md-6 tip-grid">
                <figure class="effect-julia">
                    <img src="<?php echo base_url() ?>images/w2.jpg" alt="">
                    <figcaption>
                        <h4>Heart Specialist</h4>
                        <p>We Provide the Best Medical Services.</p>
                        <p>Medical Services that you can Trust.</p>
                        <p>We Care About Your Health.</p>
                    </figcaption>			
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //what-we-do -->

<!-- Services -->
<div class="feature-w3l">
    <div class="container">
        <h3 class="tittle">Our services <span></span></h3>
        <div class="feature-grids">
            <div class="col-md-3 feature-grid">
                <div class="icons-w3">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                </div>
                <h4>Review service</h4>
                <span></span>
                <p>esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
            </div>
            <div class="col-md-3 feature-grid">
                <div class="icons-w3">
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                </div>
                <h4>Choose best practice</h4>
                <span></span>
                <p>esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
            </div>
            <div class="col-md-3 feature-grid">
                <div class="icons-w3">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                </div>
                <h4>Book appointment</h4>
                <span></span>
                <p>esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
            </div>
            <div class="col-md-3 feature-grid">
                <div class="icons-w3">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                </div>
                <h4>Medical professionals</h4>
                <span></span>
                <p>esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //Services -->

<!-- Testimonials -->
<div id="review" class="jarallax reviews agile-1">
    <div class="test-monials" id="testimonials">
        <h3 class="tittle-two">Our Patients Says <span></span></h3>
        <div class="sreen-gallery-cursual">
            <div id="owl-demo" class="owl-carousel">
                <div class="item-owl">
                    <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <p><img src="<?php echo base_url() ?>images/left-quotes.png" alt=""> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<img src="<?php echo base_url() ?>images/right-quotes.png" alt=""></p>
                        <img src="<?php echo base_url() ?>images/tt2.jpg" class="img-responsive" alt=""/>
                        <h5>Henry</h5>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <p> <img src="<?php echo base_url() ?>images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<img src="<?php echo base_url() ?>images/right-quotes.png" alt=""></p>
                        <img src="<?php echo base_url() ?>images/tt1.jpg" class="img-responsive" alt=""/>
                        <h5>Smith</h5>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <p><img src="<?php echo base_url() ?>images/left-quotes.png" alt=""> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <img src="<?php echo base_url() ?>images/right-quotes.png" alt=""></p>
                        <img src="<?php echo base_url() ?>images/tt3.jpg" class="img-responsive" alt=""/>
                        <h5>Steave</h5>
                    </div>
                </div>
            </div>
            <!--//screen-gallery-->
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //Testimonials -->
<!-- //main -->
