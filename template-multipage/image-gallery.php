<!DOCTYPE html>
<?php
$page = 'Media.php';
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
        <meta name="Dabasiya Loader" content="www.dabasiyaloaders.com" />
        <meta name="google-site-verification" content="E56UA6DL5hB3PDRSYFfPLa7RXciXcJRBVEWHwoGnUxw" />
        <link rel="icon" href="assets/imgs/logo/Logo.png" type="image/x-icon">
        <title>DABASIYA LOADERS : Loaders Services</title>
        <!-- Template CSS -->
        <link href="assets/css/default.css" rel="stylesheet">
        <style>

            div#quad figure { 
                height: auto; transition: 1s; 
                display: inline-block; 
                position: relative; 
                overflow: hidden; 
            }
            div#quad figure:hover { cursor: pointer; z-index: 4; }
            div#quad figure img { width: 100%; height: auto; }
            .expanded { transform: scale(2); z-index: 5;  }
            div.full figure:not(.expanded) { pointer-events: none; }
        </style>
    </head>
    <!-- //  Head-->
    <body>
        <?php include './header.php'; ?>



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


        <!-- Inner Header -->
        <div class="inner-header">
            <div class="pattern"></div>
            <div class="display-cell">
                <div class="container">
                    <div class="col-xs-12 text-left">
                        <div class="home-builder-page-title">
                            <h1>Our Image</h1>
                            <h1 class="titlecolor">Gallery</h1>
                            <img src="assets/imgs/linew.png" alt="">
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="active">Our Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--\\ Inner Header --> 
        <!-- Content Section -->
        <div class="content-section about-page-section">
            <div class="container">
                <h2 class="text-center text-uppercase">Our <span class="orange-txt"> Image</span></h2>
                <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt=""/></div>
                <div id="quad">
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/1.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/2.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/3.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/4.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/5.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/12.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/7.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/14.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/15.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/16.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/18.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/19.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/20.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/21.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/22.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/23.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/24.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/32.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/25.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div><div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/26.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/27.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/33.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/35.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/39.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/40.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/41.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/45.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/46.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/50.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/60.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/52.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/53.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/54.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/55.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/56.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/73.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/62.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/63.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/64.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/65.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/66.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/67.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/71.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/72.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/75.JPG" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/76.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 video">
                        <figure class="effect-jazz"> <img src="assets/imgs/gallery/73.jpg" class="img-fluid" alt="img25"/>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
        <!--\\ Content Section --> 
        <?php include './footer.php'; ?>

        <!-- Scroll Top Button --> 
        <a href="#top"></a> 
        <!--   Iframe video -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog video-modal">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe id="cartoonVideo" width="100%" height="500" src="https://www.youtube.com/embed/YPqIBIHrHkc" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- \\Iframe video --> 
        <!-- Form Submission Popup -->
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
        <!--   //Form Submission Popup --> 
        <!-- Jquery Section  --> 
        <!-- Form Script --> 
        <script src="assets/js/ajax.js"></script> 
        <script src="assets/js/formValidation.js"></script> 
        <!--  Javascript Library --> 
        <script src="assets/js/jquery-2.2.4.min.js"></script> 
        <script  src="assets/js/jquery.mixitup.min.js"></script> 
        <!-- Bootstrap v4.1.3 JavaScript --> 
        <script src="assets/js/bootstrap.min.js"></script> 
        <!-- Owl Carousel --> 
        <script src="assets/js/owlcarousel/owl.carousel.staff.js"></script> 
        <!-- Scroll to Top --> 
        <script  src="assets/js/scrolltopcontrol.js"></script> 
        <!-- Custom JS --> 
        <script src="assets/js/custom-projects.js"></script> 
        <!-- Fixed Header --> 
        <script src="assets/js/classie.js"></script> 
        <script src="assets/js/cbpAnimatedHeader.js"></script>

        <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.min.css"/>
        <script  src="assets/js/fancybox/jquery.fancybox.min.js"></script> 
        <script>
                                            var quadimages = document.querySelectorAll("#quad figure");
                                            for (i = 0; i < quadimages.length; i++) {
                                                quadimages[i].addEventListener('click', function () {
                                                    this.classList.toggle("expanded");
                                                    quad.classList.toggle("full")
                                                });
                                            }
        </script>
    </body>
    <!-- // Body -->
</html>
<!-- // HTML -->