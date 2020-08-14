<div class="top-header">
    <div class="container">
        <div class="pull-left"><a  href="index.php" title="Home"><img src="assets/imgs/logo/Logo.png" class="logo1" title=""  alt="logo" width="80px;" height="80px;" style="margin-top: -15px;"/> </a></div>
        <div class="pull-right">
            <div class="pull-center data response">
                <p><i class="fa fa-envelope" style="color: #f2a700;"></i>&nbsp; dabasiyaloaders@gmail.com&nbsp; | &nbsp;<i class="fa fa-phone" style="color: #f2a700;"></i>&nbsp; +91 99090 71615</p>
                <p style="margin-top: -15px;"></p>
            </div>
            <div class="top-menu" style="margin-top: 5px">
            </div>
            <div class="clearfix"></div>
            <div class="top-search-div">
                <div class="top-social">
                    <br><br>
                    <ul>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://www.facebook.com/srgit/" title="" target="_blank"><i class="fa fa-facebook"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://twitter.com/srgit" title="" target="_blank"><i class="fa fa-twitter"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="http://srgit.tumblr.com/" title="" target="_blank"><i class="fa fa-tumblr"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://www.linkedin.com/company/srgit" title="" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://www.instagram.com/srgit/" title="" target="_blank"><i class="fa fa-instagram"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://in.pinterest.com/srgit/" title="" target="_blank"><i class="fa fa-pinterest"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<nav class="navbar fixed-top  navbar-default navbar-custom">
    <div class="parallelogram-container">
        <div class="parallelogram"></div>
    </div>
    <div class="container">
        <div class="container-fluid no-padding"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <div class="pull-left fixed-menu-logo-2"><a href="index.php" title="Home"><img src="assets/imgs/comin-soon/logo.png" alt="logo" width="60px;" height="55px;" style="margin-top: -10px"/></a> </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="pull-left fixed-menu-logo"><a href="index.php" title="Home"><img src="assets/imgs/comin-soon/logo.png" alt="logo" width="60px;" height="60px;"/></a> </div>
                <nav class="navbar navbar-expand-sm navbar-left">
                    <ul class="nav navbar-nav">
                        <li class="<?php
                        if ($page == 'index') {
                            echo 'active';
                        }
                        ?>"><a class="home" href="index.php">Home </a></li>
                        <li class="<?php
                        if ($page == 'about') {
                            echo 'active';
                        }
                        ?>"><a class="about" href="about.php">About US</a></li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"  href="#" role="button" aria-haspopup="true" aria-expanded="false" onclick="location.href = 'product.php'" onMouseOver="onfocus1();" onmouseout="hideSubmenu();"> Products </a>
                            <div class="dropdown-menu" id="aa" style="" onMouseOver="onfocus1();" onmouseout="hideSubmenu();">
                                <div class="footer-logos content-section footer-logos-custom" style="padding-bottom: 0px !imporatant;">
                                    <div class="container">
                                        <div id="owl-demo" class="owl-carousel" >
                                            <a href="product-details.php#a"><div class="item"><img src="assets/imgs/product/WOODEN FORK BUCKET.png" alt="WOODEN FORK" width="auto" height="50px"/><p><b><br>WOODEN FORK BUCKET</b><p></div></a>
                                            <a href="product-details.php#b"><div class="item"><img src="assets/imgs/product/COTTON GRABBER BUCKET.png" alt="COTTON GRABBER" width="auto" height="50px"/><p><b><br>COTTON GRABBER BUCKET</b></p></div></a>
                                            <a href="product-details.php#h"><div class="item"><img src="assets/imgs/product/BIO-COAL BUCKET.png" alt="BIO-COAL" width="auto" height="50px"/><p><b><br>BIO-COAL BUCKET</b></p></div></a>
                                            <a href="product-details.php#d"><div class="item"><img src="assets/imgs/product/COTTON FORK BUCKET.png" alt="COTTON FORK" width="auto" height="50px"/><p><b><br>COTTON FORK BUCKET</b></p></div></a>
                                            <a href="product-details.php#e"><div class="item"><img src="assets/imgs/product/SOIL BUSTER BUCKET.png" alt="SOIL BUSTER" width="auto" height="50px"/><p><b><br>SOIL BUSTER BUCKET</b></p></div></a>
                                            <a href="product-details.php#f"><div class="item"><img src="assets/imgs/product/SUGARCANE GRABBER BUCKET.png" alt="SUGARCANE GRABBER" width="auto" height="50px"/><p><b><br>SUGARCANE GRABBER BUCKET</b></p></div></a>
                                            <a href="product-details.php#g"><div class="item"><img src="assets/imgs/product/SOIL BUCKET.png" alt="SOIL" width="auto" height="50px"/><p><b><br>SOIL BUCKET</b></p></div></a>
                                            <a href="product-details.php#c"><div class="item"><img src="assets/imgs/product/COTTON BUSTER BUCKET.png" alt="COTTON BUSTER" width="auto" height="50px"/><p><b><br>COTTON BUSTER BUCKET</b></p></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="<?php
                        if ($page == 'career') {
                            echo 'active';
                        }
                        ?>"><a class="media" href="Media.php">Media</a></li>
                        <li class="<?php
                        if ($page == 'contact') {
                            echo 'active';
                        }
                        ?>"><a  class="contact" href="contact.php">Contact Us</a></li>

                    </ul>
                </nav>
                <div class="pull-right quote-now"> <a href="" data-toggle="modal" data-target="#myModal3">Quote Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</nav>

<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog"> 
        Modal content
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
                                <button class="btn btn-clear">SUBMIT</button>
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

<script>
    function onfocus1() {
        document.getElementById('aa').style.display = 'block';
    }
    function hideSubmenu() {
        document.getElementById('aa').style.display = 'none';
    }
</script>
