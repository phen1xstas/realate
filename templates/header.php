<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Aisle - Multi-purpose Responsive One Page Template">
    <meta name="keywords" content="Aisle, Bootstrap, Landing page, Template, Business ">
    <meta name="author" content="Vivek Singh Bisht">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Title -->
    <title>
        <?php
//        echo APP_TITLE;
        ?>
        <?=APP_TITLE?>
    </title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto' rel='stylesheet' type='text/css'>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!-- menu -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <ul class="top-contacts">
                        <li><i class="fa fa-map-marker"></i> 456 New Delhi, Dwarka, IND</li>
                        <li><i class="fa fa-envelope"></i> info@gmail.com</li>
                        <li><i class="fa fa-phone"></i> (00) 123-456-789</li>
                    </ul>
                </div>
                <div class="col-md-6  col-sm-12 col-xs-12 social-list">
                    <ul class="top-social">
<!--                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="navbar navbar-default menu-top menu_dropdown">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#property">Property</a></li>
                            <li><a href="#feature">Feature</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div><!--- END CONTAINER -->
        </div>
    </div>
</header>
<!--/ menu -->
