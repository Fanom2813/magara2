<?php


require_once 'constants.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo site_name; ?> | Home</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <header class="continer-fluid ">
        <?php include 'top-header.php'; ?>
        <?php include 'header.php'; ?>
    </header>


    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <?php foreach ($data->slider as  $value) { ?>
                    <div class="item">
                        <div class="slider-img"><img src="<?php echo $value->image; ?>" alt=""></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="animated bounceInDown slider-captions">
                                        <h1 class="slider-title"><?php echo $value->title; ?></h1>
                                        <p class="slider-text hidden-xs"><?php echo $value->subtitle; ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>Introduction</h2>
                    <p>Pacem Havens Foundation is the brainchild of an ex-inmate, which he conceived while preparing for release. It started its initial activities as a loose organisation in 2019. In September 2022, after a series of interventions among ex-offenders and contributing to actions to ease in some way the life of those still in prions, Pacem Haven’s Foundation became legally registered as a non-profit organisation with the Uganda Registration Services Bureau (URSB) Registration No. 80020003824638. It was officially launched on 19th November of the same year, with the opening of a ‘halfway home’ in Kauga-Ntawo, Mukono District. The foundation targets those who have been in prison for long and may have lost touch with the outside world. While we are built on firm Christian principles and foundations, we do not discriminate on any grounds, be they age, gender, disability, or faith.</p>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <p>Becom a Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <p>Quick Fundrais</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-donate yell"></i>
                                <p>Giv Donation</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-hands-helping blu"></i>
                                <p>Help Someone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Philosophy </h1>
                    <p class="mt-3">
                    <h6>Repair</h6>
                    We recognise the need to and therefore prioritise repairing relationships between offenders and society.
                    </p>
                    <p class="mt-3">
                    <h6>Transform</h6>
                    We help the ex-offender to regain feelings of respect for self and others; and develop their own capacities to live crime-free lives.
                    </p>
                    <p class="mt-3">
                    <h6>Reintegrate</h6>
                    As much as possible, we involve the victim, offender, and community in search of ways to return to the community with trust.
                    </p>
                </div>
                <div class="col-md-6 mv-img">
                    <img width="600" src="assets/images/1663016346_fe39ec5e93e421e55982.jpeg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img width="600" src="assets/images/1663016346_fe39ec5e93e421e55982.jpeg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Vision</h1>
                    <p>Reduced recidivism through successful community reintegration where offenders become fully accepted, respected, and productive members of the community.</p>
                    <h1 class="mt-3">Mission</h1>
                    <p>To facilitate the successful reintegration of the ex-offenders back to their communities equipped with the tools for a productive life free of re-offending.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Values</h2>
            </div>
            <div class=" row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">❤️ Second chance</h5>
                            
                            <p class="card-text">We believe in the inherent possibility of every ex-offender as a human being to reform and transform their lives.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">🙏 Respect</h5>
                            
                            <p class="card-text">We treat every ex-prisoner with courtesy, dignity, and grace regardless of their background or personal history.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">🤝 Collaboration</h5>
                            
                            <p class="card-text">We work with other stakeholders as partners to support mutual understanding of ideas and open exploration of options.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">👑 Stewardship</h5>
                            
                            <p class="card-text">We take utmost responsibility and cost-effective efficiency of the funds entrusted to us as prescribed without compromise.</p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Vision</h2>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Uniqueness</h4>
                        <p class="desic text-justify">We are the first organisation of this kind in Uganda to work with ex-offenders towards personal transformation and build a model for improving their quality of life after prison. Our interventions are designed to address individual offenders’ specific issues and challenges.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Approach</h4>
                        <p class="desic text-justify">We adopt a "strength-based" approach that makes use of personal and community assets in order to help released ex-offenders face their challenges and successfully reintegrate in the community.  Our 'strengths-based' approach is premised on the belief that the process of rehabilitation and transformation is best facilitated by having ex-offenders make amends with the community by demonstrating their value and potential as a way of restorative justice.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Strategic goal</h4>
                        <p class="desic text-justify">Our strategic goal is to increase desistance (i.e., reduce reoffending) among ex-offenders in Uganda and increase their successful reintegration into society.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Focus</h4>
                        <p class="desic text-justify">Men, women, and young offenders involved in the criminal and juvenile justice systems, have recently been released after from incarceration, and are struggling to transition into society. Specific interest is on women, victims of domestic violence, and those imprisoned based on mistaken identity. </p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->



    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>OUR WORK</h2>
                <p>What we do</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="https://irangfx.com/wp-content/uploads/2019/08/mini_Fotolia_135284527_Subscription_Monthly_XL-750x430.jpg" alt="">
                        <h4>Uniqueness</h4>
                        <p class="desic text-justify">We are the first organisation of this kind in Uganda to work with ex-offenders towards personal transformation and build a model for improving their quality of life after prison. Our interventions are designed to address individual offenders’ specific issues and challenges.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="https://aiit.ac.nz/wp-content/uploads/2017/09/Approach.png" alt="">
                        <h4>Approach</h4>
                        <p class="desic text-justify">We adopt a "strength-based" approach that makes use of personal and community assets in order to help released ex-offenders face their challenges and successfully reintegrate in the community.  Our 'strengths-based' approach is premised on the belief that the process of rehabilitation and transformation is best facilitated by having ex-offenders make amends with the community by demonstrating their value and potential as a way of restorative justice.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Strategic goal</h4>
                        <p class="desic text-justify">Our strategic goal is to increase desistance (i.e., reduce reoffending) among ex-offenders in Uganda and increase their successful reintegration into society.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Focus</h4>
                        <p class="desic text-justify">Men, women, and young offenders involved in the criminal and juvenile justice systems, have recently been released after from incarceration, and are struggling to transition into society. Specific interest is on women, victims of domestic violence, and those imprisoned based on mistaken identity. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <!-- <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievemtns in Numbers</h2>
                    <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
                        But you can read the following facts in order to make sure of all pluses of our clinic:</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div> -->

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Pacem Havens Foundation has an all-volunteer Board of Directors comprised of men and women from diverse backgrounds, who are of high calibre, passionate, and self-motivated. They work together with relevant government agencies as well as non-government, private sector, and individual partners to support effective reintegration of ex-offenders.</p>
            </div>
            <div class="row team-row">
                <?php foreach ($data->team as $value) { ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?php echo $value->image; ?>" alt="">
                            <div class="det-o">
                                <h4><?php echo $value->name; ?></h4>
                                <i><?php echo $value->position; ?> </i>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2> Our Blog </h2>
                <p>Take a look at what people say about US </p>
            </div>
            <div class="blog-row row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_01.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Admin | August 10 2018</small>
                            <h4>Methods of Recuirtments</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
                            <div class="link">
                                <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_02.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Admin | August 10 2018</small>
                            <h4>Methods of Recuirtments</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
                            <div class="link">
                                <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_03.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Admin | August 10 2018</small>
                            <h4>Methods of Recuirtments</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
                            <div class="link">
                                <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Marthandam (K.K District) <br>
                        Tamil Nadu, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div>


            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Servies</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>


                </div>
                <div class="donate-link col-md-3"><a href="donate.html" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>

        </div>


    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>