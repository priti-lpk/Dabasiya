<!DOCTYPE html>
<?php
$page = 'about.php';
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
        <!-- Favicon -->
        <link rel="icon" href="assets/imgs/logo/Logo.png" type="image/x-icon">
        <title>DABASIYA LOADERS : Loaders Services</title>
        <!-- Template CSS -->
        <link href="assets/css/default.css" rel="stylesheet">
        <style>
            /*****************************************************************/
            /*****************************************************************/
            /*****************************************************************/
            /* CSS Graphs - Bar */
            /* Author: Bradley Taunt */
            /* Inspired by the data design concepts of Edward Tufte */
            /*****************************************************************/
            /*****************************************************************/
            /*****************************************************************/

            /* All fallback table styling for screens less than 800px */
            /*****************************************************************/
            @media(max-width: 800px) {

                #bar-graph {
                    border-collapse: collapse;
                    margin: 0 auto;
                    max-width: 600px;
                    padding: 0 10px;
                    width: 100%;
                }

                #bar-graph caption {
                    border-bottom: 1px solid #111;
                    font-size: 20px;
                    padding: 0 0 10px 10px;
                    text-align: left;
                }

                #bar-graph tr th,
                #bar-graph tr td {
                    border-bottom: 1px solid #E7E7E7;
                    padding: 10px;
                }

                #bar-graph tbody tr th {
                    text-align: left;
                }

                #bar-graph thead tr th,
                #bar-graph tbody tr td {
                    text-align: right;
                }

                #bar-ticks {
                    display: none;
                }

            }

            /* All styling for bar graphs only when 800px or wider */
            /*****************************************************************/
            @media(min-width: 800px) {

                #bar-graph {
                    background: transparent;
                    display: block;
                    height: 300px;
                    margin: 1.1em 0 0;
                    padding: 0;
                    position: relative;
                    width: 600px;
                }

                #bar-graph caption {
                    caption-side: top;
                    font-size: 20px;
                    letter-spacing: .5px;
                    position: absolute;
                    text-align: left;
                    top: -80px;
                    width: 600px;
                    z-index: 10;
                }

                #bar-graph tr, #bar-graph th, #bar-graph td {
                    bottom: 3px;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    text-align: center;
                    width: 150px;
                    z-index: 2;
                }

                #bar-graph td { transition: all .3s ease; }
                /*                #bar-graph td:hover {
                                    background-color: #111 !important;
                                    color: white;
                                }*/

                #bar-graph thead tr {
                    bottom: auto;
                    right: 0;
                    top: -46px;
                }

                #bar-graph thead th {
                    height: auto;
                    font-weight: 400;
                    padding: 0;
                    width: auto;
                }

                #bar-graph thead th.before {
                    line-height: 2;
                    right: -80px;
                }
                #bar-graph thead th.after {
                    line-height: 2;
                    right: 12px;
                }
                #bar-graph thead th.before:after,
                #bar-graph thead th.after:after {
                    content: '';
                    height: 10px;
                    left: -15px;
                    position: absolute;
                    top: 10px;
                    width: 10px;
                }
                #bar-graph thead th.before:after { background: #f2a700; }
                #bar-graph thead th.after:after { background: #C1C1C1; }

                #bar-graph tbody tr {
                    height: 296px;
                    padding-top: 2px;
                }

                #bar-graph #section-1 { left: 25px; }
                #bar-graph #section-1 .before { height: 172px; }
                #bar-graph #section-1 .after { height: 10px; }

                #bar-graph #section-2 { left: 225px; }
                #bar-graph #section-2 .before { height: 225px; }
                #bar-graph #section-2 .after { height: 8px; }

                #bar-graph #section-3 { left: 425px; }
                #bar-graph #section-3 .before { height: 190px; }
                #bar-graph #section-3 .after { height: 9px; }

                #bar-graph #section-4 { left: 625px; }
                #bar-graph #section-4 .before { height: 200px; }
                #bar-graph #section-4 .after { height: 10px; }

                #bar-graph #section-5 { left: 825px; }
                #bar-graph #section-5 .before { height: 190px; }
                #bar-graph #section-5 .after { height: 12px; }
                #bar-graph tbody th {
                    bottom: -1.75em;
                    font-weight: normal;
                    vertical-align: top;
                }

                #bar-graph .bar {
                    border-bottom: none;
                    border: 1px solid;
                    color: #000;
                    width: 20px;
                }
                #bar-graph .bar p { margin: 5px 0 0; padding: 0; }

                #bar-graph tbody {
                    display: block;
                    height: 340px;
                }

                #bar-graph tbody .before {
                    background-color: #f2a700;
                    border-color: transparent;
                    left: 20px;
                }

                #bar-graph tbody .after {
                    background-color: #C1C1C1;
                    border-color: transparent;
                    left: 75px;
                }

                #bar-ticks {
                    display: block;
                    height: 300px;
                    left: 0;
                    margin-bottom: -300px;
                    position: relative;
                    top: -300px;
                    width: 600px;
                    z-index: 1;
                }

                #bar-ticks .tick {
                    border-bottom: 1px solid #E7E7E7;
                    height: 59px;
                    position: relative;
                    width: 600px;
                }
                #bar-ticks .tick:first-child {
                    border-top: 1px solid #E7E7E7;
                }
                #bar-ticks .tick:last-child {
                    border: 0;
                }

                #bar-ticks .tick p {
                    left: -3em;
                    margin: 0 0 0 0.5em;
                    position: absolute;
                    top: -0.8em;
                }

            }

        </style>
    </head>
    <!-- //  Head-->
    <body>
        <!--header -->
        <?php include './header.php'; ?>

        <!--\\ Navigation --> 

        <!-- Inner Header -->
        <div class="inner-header">
            <div class="pattern"></div>
            <div class="display-cell">
                <div class="container">
                    <div class="col-xs-12 text-left">
                        <div class="home-builder-page-title">
                            <h1>About</h1>
                            <h1 class="titlecolor">Us</h1>
                            <img src="assets/imgs/linew.png" alt="">
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="active">About Us</li>
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
        <div class="content-section about-page-section">
            <div class="container">
                <div class="about-wrp">
                    <div class="abt-bx">
                        <div class="abt-thumb">
                            <img src="assets/imgs/about/58.jpg" alt="about.jpg" height="auto" width="650px;"  class="img-fluid">
                        </div>
                        <div class="abt-us-2">
                            <h3>DABASIYA LOADERS</h3>
                            <p>Dabasiya Loaders has been in business of manufacturing hydraulic loaders & agricultural equipments for the past 25 years, at Mankuva, Bhuj-Kutch, Gujarat.</p>
                            <p>We are a partnership firm engaged in manufacturing, exporting and supplying wide range of material handling equipment. We provide tractor attachments that can be fitted on various make of tractors such as Mahindra, John Deere, New Holland, Sonalika, preet, etc ranging from 35 HP to 90 HP.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="container">
                            <h2 class="text-center text-uppercase">Who <span class="orange-txt">WE</span> are</h2>
                            <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt=""/></div>
                            <div class="col-lg-6 col-md-12">
                                <div class="img-container"> <img src="assets/imgs/comin-soon/banner-1.jpg" class="img-fluid" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 no-padding" style="color: #808080">
                                <p>Dabasiya Loaders has been in business of manufacturing hydraulic loaders & agricultural equipments for the past 25 years, at Mankuva, Bhuj-Kutch, Gujarat.</p>
                                <p>We are a partnership firm engaged in manufacturing, exporting and supplying wide range of material handling equipment. We provide tractor attachments that can be fitted on various make of tractors such as Mahindra, John Deere, New Holland, Sonalika, preet, etc ranging from 35 HP to 90 HP.</p>
                                <p>Quality being one of the fundamental elements of our company has helped us to deliver excellent tractor attachments to our wide clientele and that’s why in a short span, we touched the heart of every customer by quality of our product & our services. We are continuously upgrading our expertise and production techniques to delivers world class product demanded by our wide range of clientele. We understand the significance of individuality thus consider customization critical to success of our business and equally important; satisfaction of our customers.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>-->
        </div>
        <!--\\ Content Section --> 
        <!-- what we do -->
        <div class="content-section about-what-we-do">
            <div class="container">
                <h2 class="text-uppercase" >Our Strengths <span class="orange-txt">Lies </span> in</h2>
                <div class="border-creative"><img src="assets/imgs/borders/border-3.png" alt="border"/></div>
                <div class="col-lg-12">
                    <div class="row">
                        <ul class="no-margin no-padding" style="color: #808080; margin-left: 70px">
                            <i class="fa fa-check" aria-hidden="true" style="color: #f2a700;"></i>&nbsp;&nbsp;<span>Operational efficiency.</span><br>
                            <i class="fa fa-check" aria-hidden="true" style="color: #f2a700;"></i>&nbsp;&nbsp;Touched the heart of every customer by our product quality & services.<br>
                            <i class="fa fa-check" aria-hidden="true" style="color: #f2a700;"></i>&nbsp;&nbsp;Enduring customer relationships.<br>
                            <i class="fa fa-check" aria-hidden="true" style="color: #f2a700;"></i>&nbsp;&nbsp;Domain expertise and in depth technical knowledge of our team.<br>
                            <i class="fa fa-check" aria-hidden="true" style="color: #f2a700;"></i>&nbsp;&nbsp;Loyal employees.<br>
                            <!--<li>Hone sharp leadership skills to manage your team</li>-->
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--        <div class="content-section about-page-section">
                    <div class="container">
        
                        <table id="bar-graph">
                            <caption>Web Performance Results</caption>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="before">Domestic</th>
                                    <th class="after" style="margin-top: 10px;">International</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="section-1">
                                    <th scope="row">2012</th>
                                    <td class="before bar"><p></p></td>
                                    <td class="after bar"><p></p></td>
                                </tr>
                                <tr id="section-2">
                                    <th scope="row">2013</th>
                                    <td class="before bar"><p></p></td>
                                    <td class="after bar"><p></p></td>
                                </tr>
                                <tr id="section-3">
                                    <th scope="row">2014</th>
                                    <td class="before bar"><p></p></td>
                                    <td class="after bar"><p></p></td>
                                </tr>
                                <tr id="section-4">
                                    <th scope="row">2015</th>
                                    <td class="before bar"><p></p></td>
                                    <td class="after bar"><p></p></td>
                                </tr>
                                <tr id="section-5">
                                    <th scope="row">2016</th>
                                    <td class="before bar"><p></p></td>
                                    <td class="after bar"><p></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="bar-ticks">
                            <div class="tick"><p>600</p></div>
                            <div class="tick"><p>500</p></div>
                            <div class="tick"><p>400</p></div>
                            <div class="tick"><p>300</p></div>
                            <div class="tick"><p>200</p></div>
                            <div class="tick"><p>100</p></div>
                            <div class="tick"><p>0</p></div>
                        </div>
                    </div>
                </div>-->

        <!--        <div class="content-section about-what-we-do">
                    <div class="container">
                        <h2 class="text-uppercase" >what <span class="orange-txt">WE</span> do</h2>
                        <div class="border-creative"><img src="assets/imgs/borders/border-3.png" alt=""/></div>
                        <div class="col-lg-12">
                            <div class="row">
                                <p>We are a partnership firm engaged in manufacturing, exporting and supplying wide range of material handling equipment. We provide tractor attachments that can be fitted on various make of tractors such as Mahindra, John Deere, New Holland, Sonalika, preet, etc ranging from 35 HP to 90 HP.</p>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/icon-1.png" alt="" class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>WOODEN FORK BUCKET</h4>
                                                <p>Wooden fork DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/icon-2.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>COTTON GRABBER BUCKET</h4>
                                                <p>Cotton grabber DBS-DL-HD-14F square/round.Capacity of 1 Ton.Pin height 14 Feet.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/school.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>BIO-COAL BUCKET</h4>
                                                <p>Bio coal DBS-DL-S-1.2cbm.Only DL standard is available.Bucket size: 1.2cbm.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/school.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>COTTON FORK BUCKET</h4>
                                                <p>Cotton fork DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/icon-3.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>SOIL BUSTER BUCKET</h4>
                                                <p>Soil buster DBS-DL-S-13F.Only DL standard is available.Capacity of 1 Ton.Pin height: 13 feet.Hydraulic Oil is included in price.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/commercial.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>SUGARCANE GRABBER BUCKETCommercial</h4>
                                                <p>Sugarcane grabber DBS-20F.Capacity of 1 Ton.Pin height: 20 feet.Hydraulic Oil is included in price.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/school.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>SOIL BUCKET</h4>
                                                <p>Soil standard DBS-DL-S-13F.Capacity of 1 Ton.Hydraulic Oil is included in price.</p><br>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="services-icons">
                                            <div class="col-xs-2 no-padding"><img src="assets/imgs/icons/icon-4.png" alt=""  class="img-fluid"/></div>
                                            <div class="col-xs-10">
                                                <h4>COTTON BUSTER BUCKET</h4>
                                                <p>Cotton buster DBS-DL-S-13F square.Capacity of 1 Ton.Pin height 13feet.Hydraulic Oil is included in price.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>-->
        <!--// what we do--> 
        <!--staff -->

        <!--\\ staff --> 
        <!-- footer-logos -->


        <!-- \\footer-logos --> 
        <!-- footer -->
        <?php include './footer.php'; ?>
        <!-- Scroll Top Button --> 
        <a href="#top"></a> 
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
        <!-- \\Form Submission Popup --> 


        <!-- Jquery Section  --> 
        <!-- Form Script --> 
        <script src="assets/js/ajax.js"></script> 
        <script src="assets/js/formValidation.js"></script> 
        <!-- Javascript Library --> 
        <script src="assets/js/jquery-2.2.4.min.js"></script> 
        <!-- Bootstrap v4.1.3 JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script> 
        <!-- Owl Carousel --> 
        <script src="assets/js/owlcarousel/owl.carousel.staff.js"></script> 
        <!-- Scroll to Top --> 
        <script  src="assets/js/scrolltopcontrol.js"></script> 
        <!-- Custom JS --> 
        <script src="assets/js/custom-about.js"></script> 
        <!-- Fixed header --> 
        <script src="assets/js/classie.js"></script> 
        <script src="assets/js/cbpAnimatedHeader.js"></script>
    </body>
    <!-- // Body -->
</html>
<!-- // HTML -->