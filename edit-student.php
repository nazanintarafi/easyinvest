<!doctype html>
<html class="no-js" lang="en">

<!--head-->
<?php include_once "./php/head.php";?>
<!--head-->

<body lang="<?=$_SESSION['lang'];?>">


    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include_once "./php/left-menu.php";?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <!--header top erea start-->
            <?php include_once "./php/menu.php";?>
            <!--header top ereea end-->
            <!-- Mobile Menu start -->
            <?php include_once "./php/mobile-menu.php";?>
            <!-- Mobile Menu end -->
            <!--breadcome-area start-->
            <?php include_once "./php/breadcome-area.php";?>
            <!--breadcome-area end-->
        </div>
        <!--prossecing bar-->
        <div class="progress m-t-0">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description"><?php echo $dict["Title1"]; ?></a></li>
                                <li><a href="#reviews"><?php echo $dict["Title2"]; ?></a></li>
                                <li><a href="#INFORMATION"><?php echo $dict["Title3"]; ?></a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="#" class="info-form" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="Fullname" type="text" class="form-control name" placeholder="<?php echo $dict["Title4"]; ?>"  >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="fname" type="text" class="form-control fathersname" placeholder="<?php echo $dict["Title9"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="Birthday" autocompelete="off" type="text" class="form-control birthday date-picker ltr" placeholder="<?php echo $dict["Title7"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="MelliCode" type="text" class="form-control nationalCode" placeholder="<?php echo $dict["Title10"]; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="id" type="text" class="form-control id" placeholder="<?php echo $dict["Title11"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="Country" class="form-control location" placeholder="<?php echo $dict["Title8"]; ?>" >
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="file-group" id="IDPic">
                                                                    <span><?php echo $dict["IDPic"]; ?></span>
                                                                    <input type="file" name="IDPic" class="file input-file" data-preview-file-type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="file-group" id="NotePic">
                                                                    <span><?php echo $dict["NotePic"]; ?></span>
                                                                    <input type="file" name="NotePic" class="file input-file" data-preview-file-type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"><?php echo $dict["submit"]; ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="product-tab-list tab-pane fade  info-form" id="reviews" >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section" >
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" name="bank" class="form-control" placeholder="<?php echo $dict["Title12"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="nbank" class="form-control" placeholder="<?php echo $dict["Title13"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="ncart" class="form-control" placeholder="<?php echo $dict["Title14"]; ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="sheba" class="form-control" placeholder="<?php echo $dict["Title15"]; ?>" >
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="file-group bank-file" id="CardPic">
                                                                    <span><?php echo $dict["CardPic"]; ?></span>
                                                                    <input type="file" name="CardPic" class="file input-file" data-preview-file-type="text">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div id="submit-file">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light"><?php echo $dict["submit"]; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="product-tab-list tab-pane fade  info-form" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="devit-card-custom">
                                                            <div class="row">
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="text" name="npost" class="form-control" placeholder="<?php echo $dict["Title18"]; ?>" >
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="text" name="Mob" class="form-control" placeholder="<?php echo $dict["Title19"]; ?>" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="text" name="num" class="form-control" placeholder="<?php echo $dict["Title20"]; ?>" >
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <input type="email" name="Email" class="form-control" placeholder="<?php echo $dict["Title201"]; ?>" >
                                                                </div>
                                                            </div>
															<div class="form-group">
																<input type="text" name="Address" class="form-control" placeholder="<?php echo $dict["Title17"]; ?>" >
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light"><?php echo $dict["submit"]; ?></button>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    <!-- form information JS
	============================================ -->
    <script src="js/information.js"></script>
    <!-- persian data picker
	============================================ -->
    <link rel="stylesheet" href="js/date-picker/persian-datepicker.css"/>
    <script type="text/javascript" src="js/date-picker/persian-datepicker.js"></script>
    <!-- file manager
	============================================ -->
    <?php include_once "./js/file-manager/x.php";?>
    
    

    <script src="js/custom.js"></script>
</body>

</html>