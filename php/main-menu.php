<html>
<header>
  
<?php
    $array = array(
        "hotline",
        "email",
        "adminpanel",
        "dashboard",
        "charts",
        "email",
        "FAQ",
        "profile",
        "tables",
        "invoice"
    );

    //$dict = get_text($array, $lang->Subject);
?>
<div class="top-menubar">
  <div class="topmenu">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline top-contacts">
            <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
            <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
            <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
            <li>
              <i class="fa fa-envelope"></i> <?php echo $dict["email"]; ?> <a href="mailto:info@themeborn.com">info@themeborn.com</a>
            </li>
            <li>
              <i class="fa fa-phone"></i> <?php echo $dict["hotline"]; ?> (1) 111 222 33
            </li>
          </ul>
        </div> 
        <div class="col-md-4">
          <ul class="list-inline top-data">
                <!--language-->
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link" id="lang">
                        <img src="img/languages/<?php echo $dict["Title41"]; ?>.png" alt="" id="langIcon">
                    </a>
                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn langUl">
                        <!--<li class="lang">
                            <a href="?lang=fa" id="fa">
                                <div class="language-img">
                                    <img src="img/languages/fa.png" alt="">
                                </div>
                                <div class="language-content">
                                    <span class="message-date">فارسی</span>
                                </div>
                            </a>
                        </li>
                        <li class="lang">
                            <a href="?lang=en" id="eng">
                                <div class="language-img">
                                    <img src="img/languages/en.png" alt="">
                                </div>
                                <div class="language-content">
                                    <span class="message-date">english</span>
                                </div>
                            </a>
                        </li>-->
                    </ul>
                </li>
            <!--language-->
            <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal"><?php echo $dict["login"]; ?></a></li>  
          </ul>
        </div>
      </div>
    </div>
  </div> 
</div> 

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
  <div class="container">
    <a class="navbar-brand smooth-scroll" href="index.html">
      <img src="img/logo-s.png" alt="logo">
    </a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item" ><a class="nav-link smooth-scroll" href="index.html"><?php echo $dict["Title21"]; ?></a></li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dict["Title22"]; ?></a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="about.html"><?php echo $dict["Title22"]; ?></a>
              <a class="dropdown-item" href="careers.html">Career Oprtunity</a>
              <a class="dropdown-item" href="team.html">Meet Our Team</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="testimonials.html">Testimonials</a>
            </div>
          </li>
          <li class="nav-item" ><a class="nav-link smooth-scroll" href="services.html"><?php echo $dict["Title23"]; ?></a></li> 
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dict["adminpanel"]; ?></a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
              <a class="dropdown-item"  target="_empty" href="admin/index.html"><?php echo $dict["dashboard"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/chart.html"><?php echo $dict["charts"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/email.html"><?php echo $dict["email"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/faq.html"><?php echo $dict["FAQ"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/profile.html"><?php echo $dict["profile"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/tables.html"><?php echo $dict["tables"]; ?></a> 
              <a class="dropdown-item"  target="_empty" href="admin/invoice.html"><?php echo $dict["invoice"]; ?></a> 
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dict["Title28"]; ?></a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="news-list.html">News list layouts</a>
              <a class="dropdown-item" href="news-grid.html">News grid layouts</a>
              <a class="dropdown-item" href="news-details.html">News Details</a> 
              <a class="dropdown-item" href="project.html">Project</a>
              <a class="dropdown-item" href="contact.html">Contact Us</a>
              <a class="dropdown-item" href="comming-soon.html">Comming Soon</a>
              <a class="dropdown-item" href="pricing.html">Pricing Tables</a>
              <a class="dropdown-item" href="admin/404.html">404</a>
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dict["Title29"]; ?></a> 
            <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="row">
                <div class="col-md-5">
                  <a class="dropdown-item" href="shop.html">Shop Detail</a>
                  <a class="dropdown-item" href="single-product.html">Single Product</a>
                  <a class="dropdown-item" href="cart.html">Cart</a>
                  <a class="dropdown-item" href="checkout.html">Checkout</a>
                  <a class="dropdown-item" href="myaccount.html">Myaccount</a>
                </div>
                <div class="col-md-7 mega-menu-img m-auto text-center pl-0">
                  <a href="#"><img src="img/offer_icon.png" alt="" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <i class="search fa fa-search search-btn"></i>
            <div class="search-open">
              <div class="input-group animated fadeInUp">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">Go</span>
              </div>
            </div>
          </li> 
          <li>
            <div class="top-menubar-nav">
              <div class="topmenu ">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9">
                      <ul class="list-inline top-contacts">
                        <li>
                          <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                        </li>
                        <li>
                          <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                        </li>
                      </ul>
                    </div> 
                    <div class="col-md-3">
                      <ul class="list-inline top-data">
                        <!--mobile language-->
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link" id="lang">
                                <img src="img/languages/<?php echo $dict["Title41"]; ?>.png" alt="" id="langIcon">
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn langUl">
                                <li class="lang">
                                    <a href="?lang=fa" id="fa">
                                        <div class="language-img">
                                            <img src="img/languages/fa.png" alt="">
                                        </div>
                                        <div class="language-content">
                                            <span class="message-date">فارسی</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="lang">
                                    <a href="?lang=en" id="eng">
                                        <div class="language-img">
                                            <img src="img/languages/en.png" alt="">
                                        </div>
                                        <div class="language-content">
                                            <span class="message-date">english</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--language-->
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                        <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a>

                        </li>  
                      </ul>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </li>
      </ul>  
    </div>
  </div>
</nav>
</header> 
</html>