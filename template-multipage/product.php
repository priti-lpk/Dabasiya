<!DOCTYPE html>
<?php
$page = 'services.php';
?>
<html lang="en">
    <!-- Head-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dabasiya Loaders has been in business of manufacturing hydraulic loaders & agricultural equipments for the past 25 years, at Mankuva, Bhuj-Kutch, Gujarat." />
        <meta name="author" content="Dabasiya Loader">
        <meta name="keywords" content="Dabasiya Loader,Loader Equipment,Loader,Loaders Services,Dabasiya,Dabasiya Loader in Mankuva,Mankuva Loader,Loader in Mankuva,WOODEN FORK BUCKET,COTTON GRABBER BUCKET,COTTON BUSTER BUCKET,COTTON FORK BUCKET,SOIL BUSTER BUCKET,SOIL BUSTER BUCKET,SOIL BUCKET,BIO-COAL BUCKET,hydraulic loaders,agricultural equipments,Dabasiya Loader in Mankuva-Bhuj" />
        <meta name="Dabasiya Loader" content="www.dabasiyaloaders.com" /> <meta charset="utf-8">
        <meta name="google-site-verification" content="E56UA6DL5hB3PDRSYFfPLa7RXciXcJRBVEWHwoGnUxw" />
        <!-- Favicon -->
        <link rel="icon" href="assets/imgs/logo/Logo.png" type="image/x-icon">

        <title>DABASIYA LOADERS : Loaders Services</title>
        <!-- Template CSS -->
        <link href="assets/css/default.css" rel="stylesheet">

    </head>
    <!-- //  Head-->
    <body>
        <!--header -->
        <?php include './header.php'; ?>
        <!--\\ header --> 
        <!-- Navigation -->

        <!--\\ Navigation --> 
        <!-- Inner Header -->
        <div class="inner-header">
            <div class="pattern"></div>
            <div class="display-cell">
                <div class="container">
                    <div class="col-xs-12 text-left">
                        <div class="home-builder-page-title">
                            <h1>Our</h1>
                            <h1 class="titlecolor">Product</h1>
                            <img src="assets/imgs/linew.png" alt="">
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="active">Our Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--\\ Inner Header --> 


        <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog"> 
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bgcolor">
                        <div>
                            <div class="col-xs-12 col-md-12 right-section form-sec">
                                <div class="page-subheader">
                                    <h2 class="text-dark">request a quote</h2>
                                </div>
                                <div class="border"></div>
                                <div class="description">
                                    <p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                </div>
                                <form action="/" method="post" id="requestForm">
                                    <div class="form-group no-margin">
                                        <div class="controls col-xs-6 no-padding-left">
                                            <input class="form-control input" placeholder="Name" name="name" id="name" type="text">
                                        </div>
                                        <div class="controls col-xs-6 no-padding-right">
                                            <input class="form-control input" placeholder="Email" name="email" id="email" type="text">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group no-margin">
                                        <div class="controls col-xs-6 no-padding-left">
                                            <input class="form-control input" placeholder="Service Type" name="service_type" id="service_type" type="text">
                                        </div>
                                        <div class="controls col-xs-6 no-padding-right">
                                            <input class="form-control input" placeholder="Contact no." name="contact_no" id="contact_no" type="text">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group no-margin">
                                        <div class="controls">
                                            <textarea class="form-control textarea" placeholder="Message" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input value="SUBMIT" onClick="return ajaxmailrequest();" class="btn btn-clear" type="button">
                                        <!--<button class="btn btn-clear">SUBMIT</button>-->
                                        <button class="btn btn-clear blue-btn">Reset</button>
                                        <div class="loader2"><img src="assets/imgs/processing.gif" alt="Processing..." style="display:none;"  id="loader1"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Content Section -->
        <div class="content-section services-main">

            <h2 class="text-center text-uppercase">Our <span class="orange-txt">Product</span></h2>
            <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt=""></div>
            <div class="container">
                <div class="row" id="what-we-do">

                    <div class="col-md-4 col-sm-6">
                        <a  href="product-details.php"><img src="assets/imgs/product/WOODEN FORK BUCKET.png" width="100px" height="80px"></a>
                        <h3>WOODEN FORK BUCKET</h3>
                        <p>Wooden fork DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                        <a href="product-details.php#a" class="product-details"> Read more</a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <a  href="product-details.php"><img src="assets/imgs/product/COTTON GRABBER BUCKET.png" width="90px" height="80px"></i></a>
                        <h3>COTTON GRABBER BUCKET</h3>
                        <p>Cotton grabber DBS-DL-HD-14F square/round.Capacity of 1 Ton.Pin height 14 Feet.</p><br>
                        <a href="product-details.php#b" class="product-details"> Read more</a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/BIO-COAL BUCKET.png" width="100px" height="80px">
                        <h3>BIO-COAL BUCKET</h3>
                        <p>Bio coal DBS-DL-S-1.2cbm.Only DL standard is available.Bucket size: 1.2cbm.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                        <a href="product-details.php#h" class="product-details"> Read more</a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/COTTON FORK BUCKET.png" width="100px" height="80px">
                        <h3>COTTON FORK BUCKET</h3>
                        <p>Cotton fork DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                        <a href="product-details.php#d" class="product-details"> Read more</a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/SOIL BUSTER BUCKET.png" width="100px" height="80px">
                        <h3>SOIL BUSTER BUCKET</h3>
                        <p>Soil buster DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                        <a href="product-details.php#e" class="product-details"> Read more</a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/SUGARCANE GRABBER BUCKET.png" width="100px" height="80px">
                        <h3>SUGARCANE GRABBER BUCKET</h3>
                        <p>Sugarcane grabber DBS-20F.Capacity of 1 Ton.Pin height: 20 feet.Hydraulic Oil is included in price.</p><br>
                        <a href="product-details.php#f" class="product-details"> Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/SOIL BUCKET.png" width="100px" height="80px">
                        <h3>SOIL BUCKET</h3>
                        <p>Soil standard DBS-DL-S-13F.Capacity of 1 Ton.Hydraulic Oil is included in price.</p><br>
                        <a href="product-details.php#g" class="product-details"> Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="assets/imgs/product/COTTON BUSTER BUCKET.png" width="100px" height="80px">
                        <h3>COTTON BUSTER BUCKET</h3>
                        <p>Cotton buster DBS-DL-S-13F square.Capacity of 1 Ton.Pin height 13feet.Hydraulic Oil is included in price.</p>
                        <a href="product-details.php#c" class="product-details"> Read more</a>
                    </div>
                </div>
            </div>


        </div>


        <div id="presentation">
            <div class="container">
                <div class="position-relative">

                    <div class="circle-red"></div>
                    <div class="col-md-12 text-center">
                        <h1 style="color: #000000;">Check this video presentation to know more<br> about us and our process</h1>
                        <a data-fancybox class="play-button" href="https://www.youtube.com/embed/rme8TAs0Cvg?start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            <i class="sl-icon-control-play"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div id="why-us">
            <div class="container">
                <div class="row"><div class="col-md-6 col-sm-12 position-relative">
                        <div class="about-video-bg"></div>
                        <h2 class="head-title-white">25+<br> Years<br>Experience</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h1 class="head-title-black">Why Us</h1>
                        <h2>We Craft Experiences that help brands stand out</h2>
                        <p>Home Builder is a clean, modern, and fully responsive HTML5 Template. It designed for construction company, Electric works, Repairing works, Home meaking.</p>
                        <div class="wrapper">
                            <i class="sl-icon-support"></i>
                            <h3>24 Hours Support</h3>
                            <p>Home Builder is a clean, modern, and fully responsive HTML5 Template. It designed for construction company, Electric works, Repairing works, Home meaking.</p>
                        </div>
                        <div class="wrapper">
                            <i class="sl-icon-trophy"></i>
                            <h3>15 Awards Winner</h3>
                            <p>Home Builder is a clean, modern, and fully responsive HTML5 Template. It designed for construction company, Electric works, Repairing works, Home meaking.</p>
                        </div>

                        <div class="wrapper">
                            <i class="sl-icon-people"></i>
                            <h3>50+ Professional Team</h3>
                            <p>Home Builder is a clean, modern, and fully responsive HTML5 Template. It designed for construction company, Electric works, Repairing works, Home meaking.</p>
                        </div>

                    </div>

                </div> <!-- row -->


            </div> <!-- container -->
        </div>



        <div>
            <div class="spacing top-spac90 bottom-spac80">
                <div class="fixed-bg" style="background:linear-gradient(rgba(5, 5, 5, 0.76), rgba(5, 5, 5, 0.76)),url(assets/imgs/backgrounds/service.jpg); background-size: cover"></div>
                <div id="prtcl1" class="particle-bx"></div>
                <div class="container">
                    <div class="choose-plan-wrap">
                        <div class="row text-light">
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="choose-car overlap150 overlap-160 owl-carousel owl-carousel-4 industry">
                                    <div class="plan-bx text-center">
                                        <div class="plan-hdr">
                                            <i class="flaticon-043-medal"></i>
                                            <h6>Industry We Serve </h6>
                                            <span><sup></sup></span>
                                        </div>
                                        <div class="plan-bdy">
                                            <ul class="pln-fctr-lst">
                                                <li>Agriculture</li>
                                                <li>Coal Handling</li>
                                                <li>Waste Management</li>
                                                <li>Construction</li>
                                                <li>Mining</li>
                                                <li>Cotton Handling</li>
                                                <li>Paper Handling</li>
                                                <li>Ceramic Industry</li>
                                                <li>Crushing Industry</li>
                                                <li>Wood Handling</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="sec-tile pt-40">
                                    <i class="text-uppercase">Product</i>
                                    <h2 class="mb-15 font-30">Choose the Product</h2>
                                    <a class="theme-btn mt-10 text-uppercase"  href="product-details.php">View ALL Product</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Choose Plan Wrap -->
                </div>
            </div>
        </div>



        <!--\\ Content Section --> 
        <!-- footer-logos -->

        <!-- \\footer-logos --> 
        <!-- footer -->
        <?php include './footer.php'; ?>
        <!-- Scroll Top Button --> 
        <a href="#top"></a> 
        <!--  Form Submission Popup -->
        <p class="no-margin" data-toggle="modal" data-target="#myModalsubs" id="model2"></p>
        <div id="myModalsubs" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body"> <br />
                        <br />
                        <h3 class="modal-title">Thank You</h3>
                        <h4>We will get back to you as soon as possible.</h4>
                        <br />
                        <br />
                        <br />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  \\ Form Submission Popup --> 

        <!-- Jquery Section  --> 
        <!-- Form Script --> 
        <script src="assets/js/ajax.js"></script> 
        <script src="assets/js/formValidation.js"></script> 
        <!-- JavaScript Library --> 

        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <!-- Bootstrap v4.1.3 JavaScript -->  
        <script src="assets/js/bootstrap.min.js"></script> 


        <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.min.css"/>
        <script  src="assets/js/fancybox/jquery.fancybox.min.js"></script> 

        <script src="assets/js/particles.js"></script>
        <script src="assets/js/part-int.js"></script>

        <!-- Owl Carousel -->
        <script src="assets/js/owl-car-new/owl-carousel.js"></script> 
        <!-- Owl Carousel --> 
        <script src="assets/js/owlcarousel/owl.carousel.staff.js"></script> 
        <!-- Scroll to Top --> 
        <script  src="assets/js/scrolltopcontrol.js"></script> 

        <!-- Custom JS--> 
        <script src="assets/js/custom-services.js"></script>  
        <!-- Fixed Header--> 
        <script src="assets/js/classie.js"></script> 
        <script src="assets/js/cbpAnimatedHeader.js"></script> 
    </body>
    <!-- // Body -->
</html>
<!-- // HTML -->