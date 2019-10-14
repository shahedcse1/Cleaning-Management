<html lang="en"> 
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="description" content="clean aid" />
        <meta property="og:title" content="clean aid"/>
        <meta property="og:description" content="clean aid BD" />
        <meta property="og:image" content="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/social-image.png" />
        <meta name="format-detection" content="telephone=no">

        <!-- FAVICONS ICON -->
        <link rel="icon" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/Capture.PNG" />

        <!-- PAGE TITLE HERE -->
        <title><?= $page_title; ?></title>

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="https://assets/dlab-html/clean360/xhtml/js/html5shiv.min.js"></script>
        <script src="https://assets/dlab-html/clean360/xhtml/js/respond.min.js"></script>
        <![endif]-->

        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/css/style.css">
        <link class="skin" rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/css/skin/skin-3.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/css/templete.css">
        <!-- REVOLUTION SLIDER CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/plugins/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/plugins/revolution/css/navigation.css">
        <style>
            #loading-area {
                width: 100%;
                height: 100%;
                background-color: #e6f4fb;
                position: fixed;
                left: 0;
                top: 0;
                opacity: 1;
                z-index: 9999;
                background-image: url(<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/pest_control.gif);
                background-repeat: no-repeat;
                background-size: 250px;
                background-position: center;

            }

            .styleswitcher-right{
                display: none; 
            }
            .bt-buy-now{
                display: none; 
            }

            .bt-support-now{
                display: none; 
            }

            .at-expanding-share-button-toggle-bg{
                display: none; 
            }
        </style>
    </head>
    <div id="loading-area"></div>

    <header class="site-header header-style-3 mo-left light">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);"><i class="fa fa-clock-o "></i> <span style="color:black;"><?php echo date("F j, Y, g:i a", strtotime(date("Y-m-d h:i:s"))) ?></span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-phone "></i> <span style="color:black;">+88-01686305087</span> </a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-envelope-o "></i> <span style="color:black;">info@cleanaidbd.com</span></a></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook "></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter "></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin "></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus "></i></a></li>
                            <li><a href="<?= base_url('Login'); ?>"><button  style=" background-color: black"class="site-button">Login</button></a></li>
                           <!-- <li> <a id="quik-search-btn"><i class="fa fa-search "></i></a> </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header main-bar-wraper header-curve navbar-expand-lg" >
            <div class="main-bar clearfix ">
                <div class="slide-up">
                    <div class="container clearfix bg-primary" style="background-color:#080710">
                        <!-- website logo -->
                        <div class="logo-header mostion"><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/logo3.png" width="193" height="89" alt=""></a></div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <div class="extra-nav header3-btn disnone-md">
                            <div class="extra-cell">
                                <a href="<?= base_url('Appointment') ?>" class="site-button white skew-secondry">Appointment Now</a>
                            </div>
                        </div>
                        <!-- extra nav -->
                        <div class="extra-nav"> </div>
                        <!-- Quik search -->
                        <div class="quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" style="background-color:#080710"  id="navbarNavDropdown">
                            <ul class=" nav navbar-nav">
                                <li class="active"> <a href="<?= base_url(); ?>">Home</a> </li>

                                <li> <a href="javascript:;">About<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('About') ?>">Why clean Aid </a></li>
                                        <li><a href="<?= base_url('About/ourteam') ?>">Expertise Of clean Aid</a></li>
                                    </ul>
                                </li>

                                <li> <a href="javascript:;">Services<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;">Business Pest Control</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= base_url('Services/commercialpest_control'); ?>">Commercial Pest Control</a></li>
                                                <li><a href="<?= base_url('Services/foodpest_control'); ?>">Pest Control For Food Retail</a></li>
                                                <li><a href="<?= base_url('Services/hospitalpest_control'); ?>">Pest Control For Hospital</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('Services/propertypest_control'); ?>">Property Pest Control</a></li>
                                        <li><a href="<?= base_url('Services/pricing'); ?>">Pest Control Price</a></li>

                                    </ul>
                                </li>

                                <li> <a href="<?= base_url('Project_gallery'); ?>">Gallery</a> </li>
                                <li> <a href="<?= base_url('Blog'); ?>">Blog</a> </li>
                                <li> <a href="<?= base_url('Contact'); ?>">Contact</a> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
</html>