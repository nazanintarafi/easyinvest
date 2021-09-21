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
                <!-- Static Table Start -->
                <div class="data-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div>
                                <div class="container-fluid sparkline13-list sparkline11-list mt-b-30">
                                    <div class="sparkline13-hd">
                                        <div class="main-sparkline13-hd">
                                            <h1><span class="table-project-n"><?php echo $dict["Title99"]; ?></span></h1>
                                        </div>
                                    </div>
                                    <div class="sparkline13-graph static-table-list">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <div class="responsive-table">
                                                <table class="table sparkle-table display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="icon"></th>
                                                            <th data-field="name" class="ass-name"><?php echo $dict["Title80"]; ?></th>
                                                            <th><?php echo $dict["Title103"]; ?></th>
                                                            <th data-field="price" ><?php echo $dict["Title107"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title100"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title101"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title102"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title82"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title84"]; ?></th>
                                                            <th data-field="percent" ><?php echo $dict["Title85"]; ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="users-data" class="table-body">

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
                                    <!-- Static Table Start -->
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div>
                                                    <div class="container-fluid sparkline13-list sparkline11-list mt-b-30">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1><span class="table-project-n"><?php echo $dict["Title98"]; ?></span></h1>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph static-table-list">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                            <div id="toolbar">
                                                                <select class="form-control dt-tb">
                                                                    <option value="all"><?php echo $dict["Title87"]; ?></option>
                                                                    <option value="high"><?php echo $dict["Title88"]; ?></option>
                                                                    <option value="low"><?php echo $dict["Title89"]; ?></option>
                                                                    <option value="medium"><?php echo $dict["Title890"]; ?></option>
                                                                </select>
                                                                </div>
                                                                <div class="responsive-table">
                                                                    <table id="fund-data-table" class="table sparkle-table display" style="width:100%">
                                                                        <!--search bar-->
                                                                        <?php include_once "./search-bar.php";?>
                                                                        <thead>
                                                                            <tr>
                                                                                <th data-field="icon"></th>
                                                                                <th data-field="name" class="ass-name"> <?php echo $dict["Title80"]; ?></th>
                                                                                <th><?php echo $dict["Title103"]; ?></th>
                                                                                <th data-field="price" ><?php echo $dict["Title107"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title82"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title83"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title84"]; ?></th>
                                                                                <th data-field="percent" > <?php echo $dict["Title85"]; ?></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="fund-data" class="table-body">
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- <script src="js/data-table/jquery-table.min.js"></script> -->
    <!-- bootstrap JS
    bazesh kon filo
    what the faz ? :)) in 2 ta unjurish kard dg khob koja callesh kardi ?bebin mn html esho k copy krdm haminjam addresse ino dadam doros shod
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
    <!-- sparkline JS
	============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- peity JS
	============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
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
    <!--separate num Js
    ============================================ -->
    <!-- <script src="js/data-table/separate-num.js"></script> -->
    <!--  table JS
	============================================ -->
    <script src="js/data-table/users-data.js"></script>
    <script src="js/data-table/fund-data.js"></script>
</body>

</html>