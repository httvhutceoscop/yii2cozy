<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$appAsset = new AppAsset();
$baseUrl = $appAsset->baseUrl;
$basePath = $appAsset->basePath;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <!-- Page Title -->
    <title><?= Html::encode($this->title) ?></title>

    <meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
    <meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
    <meta name="author" content="bất động sản, giá rẻ đẹp" />

    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=$baseUrl?>/images/fav_touch_icons/favicon.ico" />
    <link rel="apple-touch-icon" href="<?=$baseUrl?>/images/fav_touch_icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$baseUrl?>/images/fav_touch_icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$baseUrl?>/images/fav_touch_icons/apple-touch-icon-114x114.png" />

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

    <?= Html::csrfMetaTags() ?>

    <!-- Revolution Slider CSS settings -->
    <link rel="stylesheet" type="text/css" href="<?=$baseUrl?>/rs-plugin/css/settings.css" media="screen" />

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN HEADER -->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul id="top-info">
                            <li>Phone: 800-123-4567</li>
                            <li>Email: <a href="mailto:hello@yourcompany.com">hello@yourcompany.com</a></li>
                        </ul>

                        <ul id="top-buttons">
                            <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="#"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                            <li class="divider"></li>
                            <li>
                                <div class="language-switcher">
                                    <span><i class="fa fa-globe"></i> English</span>
                                    <ul>
                                        <li><a href="#">Deutsch</a></li>
                                        <li><a href="#">Espa&ntilde;ol</a></li>
                                        <li><a href="#">Fran&ccedil;ais</a></li>
                                        <li><a href="#">Portugu&ecirc;s</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?=Yii::$app->homeUrl?>" class="nav-logo"><img src="images/logo.png" alt="Cozy Logo" /></a>

                        <!-- BEGIN SEARCH -->
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Search..." type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <i class="fa fa-search sb-icon-search"></i>
                            </form>
                        </div>
                        <!-- END SEARCH -->

                        <!-- BEGIN MAIN MENU -->
                        <nav class="navbar">
                            <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>

                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="active" href="<?=Yii::$app->homeUrl?>">Home</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">Properties<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="properties-detail.html">Properties Detail</a></li>
                                        <li><a href="properties-list.html">Properties List</a></li>
                                        <li><a href="properties-grid.html">Properties Grid</a></li>
                                        <li><a href="properties-grid2.html">Properties Grid 2</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">Pages<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Agency</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="agency-detail.html">Agency Detail</a></li>
                                                <li><a href="agency-listing.html">Agency Listing</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Agent</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                                <li><a href="agent-listing.html">Agent Listing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="404.html">404</a></li>

                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#"> Separated link </a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">Blog<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                        <li><a href="blog-listing1.html">Blog Listing 1</a></li>
                                        <li><a href="blog-listing2.html">Blog Listing 2</a></li>
                                        <li><a href="blog-listing3.html">Blog Listing 3</a></li>
                                        <li><a href="blog-listing4.html">Blog Listing 4</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?=Url::to(['/site/contact'])?>">Contacts</a></li>
                            </ul>

                        </nav>
                        <!-- END MAIN MENU -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <div class="wrap_content">
        <?php
    //    NavBar::begin([
    //        'brandLabel' => 'My Company',
    //        'brandUrl' => Yii::$app->homeUrl,
    //        'options' => [
    //            'class' => 'navbar-inverse navbar-fixed-top',
    //        ],
    //    ]);
    //    $menuItems = [
    //        ['label' => 'Home', 'url' => ['/site/index']],
    //        ['label' => 'About', 'url' => ['/site/about']],
    //        ['label' => 'Contact', 'url' => ['/site/contact']],
    //    ];
    //    if (Yii::$app->user->isGuest) {
    //        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    //        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    //    } else {
    //        $menuItems[] = '<li>'
    //            . Html::beginForm(['/site/logout'], 'post')
    //            . Html::submitButton(
    //                'Logout (' . Yii::$app->user->identity->username . ')',
    //                ['class' => 'btn btn-link']
    //            )
    //            . Html::endForm()
    //            . '</li>';
    //    }
    //    echo Nav::widget([
    //        'options' => ['class' => 'navbar-nav navbar-right'],
    //        'items' => $menuItems,
    //    ]);
    //    NavBar::end();
        ?>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?//= Alert::widget() ?>
        <?= $content ?>
    </div>

    <!-- BEGIN FOOTER -->
    <footer id="footer">
        <div id="footer-top" class="container">
            <div class="row">
                <div class="block col-sm-3">
                    <a href="index.html"><img src="images/logo.png" alt="Cozy Logo" /></a>
                    <br><br>
                    <p>Cozy is a simple clean and modern HTML template designed for Real Estate business. This template has a lot of useful features and it's highly customizable so you can turn it into your own awesome website.</p>
                </div>
                <div class="block col-sm-3">
                    <h3>Contact Info</h3>
                    <ul class="footer-contacts">
                        <li><i class="fa fa-map-marker"></i> 24th Street, New York, USA</li>
                        <li><i class="fa fa-phone"></i> 00351 123 456 789</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:email@yourbusiness.com">email@yourbusiness.com</a></li>
                    </ul>
                </div>
                <div class="block col-sm-3">
                    <h3>Helpful Links</h3>
                    <ul class="footer-links">
                        <li><a href="properties-list.html">All Properties Available</a></li>
                        <li><a href="agent-listing.html">Look for an Agent</a></li>
                        <li><a href="agency-listing.html">Look for an Agency</a></li>
                        <li><a href="pricing-tables.html">See our Pricing Tables</a></li>
                    </ul>
                </div>
                <div class="block col-sm-3">
                    <h3>Latest Listings</h3>
                    <ul class="footer-listings">
                        <li>
                            <div class="image">
                                <a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
                            </div>
                            <p><a href="properties-detail.html">Luxury Apartment with great views<span>+</span></a></p>
                        </li>
                        <li>
                            <div class="image">
                                <a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
                            </div>
                            <p><a href="properties-detail.html">Stunning Villa with 5 bedrooms<span>+</span></a></p>
                        </li>
                        <li>
                            <div class="image">
                                <a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
                            </div>
                            <p><a href="properties-detail.html">Recent construction with 3 bedrooms.<span>+</span></a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- BEGIN COPYRIGHT -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; Fisall <?= date('Y') ?> - All rights reserved. Developed by <a href="http://www.toilamit.com" target="_blank">toilamit</a>

                        <!-- BEGIN SOCIAL NETWORKS -->
                        <ul class="social-networks">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <!-- END SOCIAL NETWORKS -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->

    </footer>
    <!-- END FOOTER -->

</div>
<!-- END WRAPPER -->


<!-- Libs -->
<script src="js/common.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="js/infobox.min.js"></script>

<!-- jQuery Revolution Slider -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Template Scripts -->
<script src="js/variables.js"></script>
<script src="js/scripts.js"></script>

<!-- Agencies list -->
<script src="js/agencies.js"></script>

<script type="text/javascript">
    (function($){
        "use strict";

        $(document).ready(function(){
            //Create agencies map with markers and populate dropdown agencies list.
            Cozy.agencyMap(agencies, "map_agency");
        });
    })(jQuery);
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
