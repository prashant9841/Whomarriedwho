<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0 " />
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description' ); ?></title>
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
</head>

  <body>

    <?php $logo = get_template_directory_uri().'/img/logo.png'; ?>
    <!-- Preloader
    ================================================== -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <!-- Navigation
    ================================================== -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>              
          </button>
          <a class="navbar-brand" href="/"><img src="<?php echo $logo; ?>" alt="logo"></a> <!-- Your logo here-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="page-scroll" href="#banner">Home</a></li>
            <li><a class="page-scroll" href="#vision">Vision</a></li>
            <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#footer">Contact</a></li>
            <li><a href="gallery.html">Gallery</a></li>
          </ul>
        </div><!-- End navbar-collapse -->
      </div><!-- End container -->
    </nav>
