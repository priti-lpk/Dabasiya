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
                            <h1>Our Video</h1>
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
                <h2 class="text-center text-uppercase">Our <span class="orange-txt"> Video</span></h2>
                <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt=""/></div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player1" width="560" height="315" src="https://www.youtube.com/embed/h0DHa_Ct5Sg?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player2" width="560" height="315" src="https://www.youtube.com/embed/gEng3GKSApg?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player3" width="560" height="315" src="https://www.youtube.com/embed/qdrQh1NPuUg?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player4" width="560" height="315" src="https://www.youtube.com/embed/JgA2czQI2rA?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player5" width="560" height="315" src="https://www.youtube.com/embed/Z0-SDHh5I3w?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player6" width="560" height="315" src="https://www.youtube.com/embed/rme8TAs0Cvg?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="yt_players" id="player7" width="560" height="315" src="https://www.youtube.com/embed/kS52FdJEgh0?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
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
        <script src="assets/js/player_api.js"></script>

        <script>
                                            players = new Array();
                                            function onYouTubeIframeAPIReady() {
                                                var temp = $("iframe.yt_players");
                                                for (var i = 0; i < temp.length; i++) {
                                                    var t = new YT.Player($(temp[i]).attr('id'), {
                                                        events: {
                                                            'onStateChange': onPlayerStateChange
                                                        }
                                                    });
                                                    players.push(t);
                                                }

                                            }
                                            onYouTubeIframeAPIReady();


                                            function onPlayerStateChange(event) {

                                                if (event.data == YT.PlayerState.PLAYING) {
                                                    var temp = event.target.a.src;
                                                    var tempPlayers = $("iframe.embed-responsive-item");
                                                    for (var i = 0; i < players.length; i++) {
                                                        if (players[i].a.src != temp)
                                                            players[i].stopVideo();

                                                    }
                                                }
                                            }
        </script>
    </body>
    <!-- // Body -->
</html>
<!-- // HTML -->