<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bornwiki.com/themes/born/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2017 04:45:37 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description' ); ?></title>
        <?php wp_head(); ?>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
    <!--     <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
 -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="js/html5.js"></script>
          <script src="js/meadiaquery.js"></script>
        <![endif]-->
    </head>
    <body>

    <?php $logo = get_template_directory_uri().'/images/logo.png'; ?>
        <header>
            <!-- Navbar -->
            <div class="navbar navbar-default star-navigation" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url('/'); ?>" title="logo"><strong><img src="<?php echo $logo; ?>"></strong> </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav"> 

                            <?php dynamic_sidebar( 'main-nav' ); ?> 
                        </ul>
                        <div id="sb-search" class="sb-search">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                            <form>

                                <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"></span>
                            </form> 
                        </div>
                    </div><!--/navbar-collapse-->
                </div>    
            </div>
            <!-- navbar -->
        </header>