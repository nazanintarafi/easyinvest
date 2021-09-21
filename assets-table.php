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
        <!-- tabs start-->
        <div class="admintab-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="admintab-wrap edu-tab1 mg-t-30">
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                <li class="active"> 
                                    <a data-toggle="tab" href="#TabProject" class="all-tab">
                                        <span class="edu-icon edu-analytics tab-custon-ic"></span><?php echo $dict["Title95"]; ?>
                                    </a>
                                </li>
                                <li>
                                    <a id="favorite" data-toggle="tab" href="#TabDetails" class="fav-tab">
                                        <span class="edu-icon edu-analytics-arrow tab-custon-ic"><?php echo $dict["Title96"]; ?></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <!-- Static Table Start -->
                                    
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div>
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1><span class="table-project-n"><?php echo $dict["Title90"]; ?></span></h1>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div class="responsive-table">
                                                                    <table id="data-table" class="table sparkle-table display" style="width:100%">
                                                                    <!--search bar-->
                                                                    <?php include_once "./search-bar.php";?>
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 29px; margin-bottom: 0px; padding-right: 10px !important; padding-left: 5px !important;" class="bs-checkbox  sortable" data-field="state" tabindex="0">
                                                                                    <div class="th-inner " style="font-size:15px;"><input name="btSelectAll" type="checkbox">
                                                                                        <span class="fa fa-star"></span>
                                                                                    </div>
                                                                                    <div class="fht-cell"></div>
                                                                                </th>
                                                                                <th data-field="icon"></th>
                                                                                <th data-field="name" class="ass-name"> <?php echo $dict["Title80"]; ?></th>
                                                                                <th><?php echo $dict["Title103"]; ?></th>
                                                                                <th data-field="price" > <?php echo $dict["Title107"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title82"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title83"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title84"]; ?></th>
                                                                                <th data-field="percent" ><?php echo $dict["Title85"]; ?></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="alldata" class="table-body">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                                </div>
                                <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                    <!--fav table-->
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div>
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1><span class="table-project-n"><?php echo $dict["Title90"]; ?></span></h1>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div class="responsive-table">
                                                                    <table id="favdata" class="table sparkle-table display" style="width:100%">
                                                                    <!--search bar-->
                                                                    <?php include_once "./search-bar.php";?>
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 29px; margin-bottom: 0px; padding-right: 10px !important; padding-left: 5px !important;" class="bs-checkbox  sortable" data-field="state" tabindex="0">
                                                                                    <div class="th-inner " style="font-size:15px;"><input name="btSelectAll" type="checkbox">
                                                                                        <span class="fa fa-star"></span>
                                                                                    </div>
                                                                                    <div class="fht-cell"></div>
                                                                                </th>
                                                                                <th data-field="icon"></th>
                                                                                <th data-field="name" class="ass-name"> <?php echo $dict["Title80"]; ?></th>
                                                                                <th><?php echo $dict["Title103"]; ?></th>
                                                                                <th data-field="price" > <?php echo $dict["Title107"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title82"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title83"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title84"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title85"]; ?></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="alldata" class="table-body">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--fav table-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabs End-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- <script src="js/data-table/jquery-table.min.js"></script> -->
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


    
    <!--separate num Js
        ============================================ -->
    <script src="js/data-table/separate-num.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- select table JS
	============================================ -->
    <script src="js/data-table/select-table.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- search bar JS
		============================================ -->
    <script src="js/search-bar.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    <!-- favorite table JS
	============================================ -->
    <script src="js/data-table/favorite-table.js"></script>
    <!--  table JS
	============================================ -->
    <script src="js/data-table/assets-data.js"></script>
</body>


</html>