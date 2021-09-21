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
        <div class="fund-details product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <!--linear chart-->
                            <h3 class="fund-title"><?php echo $dict["fundvalue"]; ?></h3>
                            <div class="chart-container">
                              <canvas id="myChart" style="min-height:300px!important"></canvas>
                            </div>
                            <!--linear chart-->
                            <!--widget-->
                            <div id="widget">
                              <div class="container-fluid">
                                <div class="row">
                                  <h3 class="fund-title"><?php echo $dict["efficiency"]; ?></h3>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                        <div class="skill-content-3 analytics-edu">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3><span class="counter">65</span>%</h3>
                                                        <p><?php echo $dict["amonth"]; ?></p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                        <div class="skill-content-3 analytics-edu">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3><span class="counter">95</span>%</h3>
                                                        <p><?php echo $dict["threemonths"]; ?></p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                        <div class="skill-content-3 analytics-edu">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3><span class="counter">95</span>%</h3>
                                                        <p><?php echo $dict["sixmonths"]; ?></p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                        <div class="skill-content-3 analytics-edu">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3><span class="counter">95</span>%</h3>
                                                        <p><?php echo $dict["ayear"]; ?></p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total reso-mg-b-30">
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <div class="price-edu-rate">
                                                        <h3><span>$</span><span class="counter">7500</span></h3>
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                                <div class="income-range">
                                                    <p><?php echo $dict["assetsvolume"]; ?></p>
                                                    <span class="income-percentange bg-green"><span class="counter">95</span>% <i class="fa fa-bolt"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total">
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <div class="price-edu-rate">
                                                        <h3><span>$</span><span class="counter">640</span></h3>
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline6"></span>
                                                    </div>
                                                </div>
                                                <div class="income-range order-cl">
                                                    <p><?php echo $dict["assetsvalue"]; ?></p>
                                                    <span class="income-percentange bg-red"><span class="counter">65</span>% <i class="fa fa-level-up"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <div class="price-edu-rate">
                                                        <h3><span class="counter">75%</span></h3>
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline2"></span>
                                                    </div>
                                                </div>
                                                <div class="income-range visitor-cl">
                                                    <p><?php echo $dict["Durationofuserpresence"]; ?></p>
                                                    <span class="income-percentange bg-blue"><span class="counter">75</span>% <i class="fa fa-level-up"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total res-mg-t-30 dk-res-t-pro-30">
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <div class="price-edu-rate">
                                                        <h3><span class="counter">35%</span></h3>
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline5"></span>
                                                    </div>
                                                </div>
                                                <div class="income-range low-value-cl">
                                                    <p><?php echo $dict["Profitandlosspercentage"]; ?></p>
                                                    <span class="income-percentange bg-purple"><span class="counter">35</span>% <i class="fa fa-level-down"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <!--widget-->
                            <!--description-->
                            <div class="fund-description">
                              <h3><?php echo $dict["funddescription"]; ?></h3>
                              <div class="desc">
                                <p><?php echo $dict["funddescriptioncontent"]; ?></p>
                              </div>
                            </div>
                            <!--description-->
                            <!--table-->
                            <div class="sparkline13-graph">
                              <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="responsive-table">
                                  <table id="fund-data-table" class="table sparkle-table display" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th data-field="name"> <?php echo $dict["assetsname"]; ?></th>
                                        <th data-field="price" > <?php echo $dict["Percentageofassets"]; ?></th>
                                        <th data-field="percent" > <?php echo $dict["Profitandlosspercentage"]; ?></th>
                                        <th data-field="percent" > <?php echo $dict["Market"]; ?></th>
                                        <th><?php echo $dict["entrydate"]; ?></th>
                                      </tr>
                                    </thead>
                                    <tbody id="funddata" class="table-body">

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <!--table-->
                            <!--managers-->
                            <h3 id="managers"><?php echo $dict["managers"]; ?></h3>
                            <div class="contacts-area mg-b-15">
                            </div>
                            <!--managers-->
                            <!--User activities table-->
                            <div class="sparkline13-graph">
                              <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="responsive-table">
                                  <table id="user-activities-table" class="table sparkle-table display" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th data-field="date"> <?php echo $dict["transactiondate"] ?></th>
                                        <th data-field="type"> <?php echo $dict["Typeoftransaction"]; ?></th>
                                        <th data-field="amount" > <?php echo $dict["transactionamount"]; ?></th>
                                        <th data-field="volume" > <?php echo $dict["Transactionvolume"]; ?></th>
                                        <th data-field="condition" > <?php echo $dict["Condition"]; ?></th>
                                      </tr>
                                    </thead>
                                    <tbody id="activities-data" class="table-body">

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <!--User activities table-->
                            <!--cash in & cash out modals-->
                            <div class="modal-area-button cash-btn button-ap-list responsive-btn">
                              <button type="button" class="btn btn-custon-four btn-success"><a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalblbgpro"><?php echo $dict["cashin"]; ?></a></button>
                              <button type="button" class="btn btn-custon-four btn-danger"><a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalblbgproout"><?php echo $dict["cashout"]; ?></a></button>
                            </div>
                            <!--cash in-->
                            <div id="PrimaryModalblbgpro" class="cash-in-modal modal modal-edu-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-body">
                                          <div id="cashin-body"></div>
                                          <form class="price-form">
                                            <input class="price-input" type="text" class="form-control" placeholder="<?php echo $dict["Enterthedesiredamount"]; ?>"/>
                                            <p id="cashin-error"></p>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <a data-dismiss="modal" href="#"><?php echo $dict["confirm"]; ?></a>
                                          <a data-dismiss="modal" href="#"><?php echo $dict["cancel"]; ?></a>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <!--cash in-->
                            <!--cash out-->
                            <div id="PrimaryModalblbgproout" class="cash-out-modal modal modal-edu-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-body cash-out-body">
                                          <div>
                                            <div class="row">
                                                <h5><?php echo $dict["amountofuserassets"]; ?></h5>
                                                <span id="volume-content"></span>
                                                <h5><?php echo $dict["Priceperunitoffund"]; ?></h5>
                                                <span id="price-content"></span>
                                                <h5><?php echo $dict["Userassetvalue"]; ?></h5>
                                                <span id="value-content"></span>
                                            </div>
                                          </div>
                                          <form class="price-form">
                                            <input class="price-input" type="text" class="form-control" placeholder="<?php echo $dict["Enterthedesiredamount"]; ?>"/>
                                            <p id="cashout-error"></p>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <a data-dismiss="modal" href="#"><?php echo $dict["confirm"]; ?></a>
                                          <a data-dismiss="modal" href="#"><?php echo $dict["cancel"]; ?></a>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <!--cash in & cash out modals-->
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
    <!--  fund-details JS
	  ============================================ -->
    <script src="js/fund-details/fund-chart.js"></script>
    <script src="js/fund-details/fund-table-data.js"></script>
    <script src="js/fund-details/user-activities-table.js"></script>
    <script src="js/fund-details/manager-information.js"></script>
    <script src="js/fund-details/cash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
</body>

</html>