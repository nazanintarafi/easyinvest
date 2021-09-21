
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bar Charts | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- languages
		============================================ -->
    <?php 
    session_start();
    @$_SESSION['lang'] = @$_SESSION['lang'] ?? 'fa';
    if(isset($_GET["lang"])){
      @$_SESSION['lang'] =   $_GET["lang"];
    }
    include @$_SESSION['lang'].'.php';
    
    ?>
    <!-- file manager
		============================================ -->
  <link href="js/file-manager/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="js/file-manager/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap-<?php echo $dict["Title0"]; ?>.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize-<?php echo $dict["Title0"]; ?>.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu-<?php echo $dict["Title0"]; ?>.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- search-bar CSS
		============================================ -->
    <link rel="stylesheet" href="css/search-bar/search-bar-<?php echo $dict["Title0"]; ?>.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical-<?php echo $dict["Title0"]; ?>.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style-<?php echo $dict["Title0"]; ?>.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/preloader/preloader-style.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/data-table-<?php echo $dict["Title0"]; ?>.css">
    <!-- table CSS
		============================================ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/data-table/table-<?php echo $dict["Title0"]; ?>.css">

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- language JS
		============================================ -->
    <script src="js/language/languages.js"></script>
    <!-- login-info
		============================================ -->
    <script src="js/login-info.js"></script>
    <!-- fund-details
		============================================ -->
    <link rel="stylesheet" href="css/fund-details/fund-chart.css">
    <link rel="stylesheet" href="css/fund-details/fund-details.css">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive-<?php echo $dict["Title0"]; ?>.css">
    <!-- notifications JS
		============================================ -->    
    <script src="js/notifications/header-notifications.js"></script>
    <!-- activities JS
		============================================ -->    
    <script src="js/activities/header-activities.js"></script>
    <!-- get language JS
		============================================ -->    
    <script src="js/language.js"></script>


 
</head>