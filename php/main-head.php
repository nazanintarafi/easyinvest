<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Business Bootstrap Responsive Template</title>
        <link rel="shortcut icon" href="img/favicon.ico">
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
        <!-- Global Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
        <link href="css/main-bootstrap-<?php echo $dict["Title0"]; ?>.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate/animate.min.css">
        <link rel="stylesheet" href="./main-style-<?php echo $dict["Title0"]; ?>.css">    
        <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- login-info
        ============================================ -->
        <script src="js/login-info.js"></script>
        <!-- get language JS
		============================================ -->    
        <script src="js/language.js"></script>
    </head>
</html>