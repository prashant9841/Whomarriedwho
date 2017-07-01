

            <!-- <li><a href="<?php echo get_option('facebook_link') ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
 -->

<footer>

    <?php $logo = get_template_directory_uri().'/images/logo.png'; ?>
    
    <section class="footer">
        <div class="container">
            <div class="wrap-section clearfix">
                <div class="social-network pull-left">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                </div>
                <div class="footer-logo pull-right">
                    <a href="#"><img src="<?php echo $logo; ?>" alt="logo"></a>
                </div>
            </div>
        </div>
    </section>
</footer>


  <?php wp_footer(); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="js/jquery.js"></script>
Include all compiled plugins (below), or include individual files as needed
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
 -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
        $(".tip").tooltip();

    });
    new UISearch(document.getElementById('sb-search'));
    $('.widget_nav_menu .menu').addClass('nav nav-bar');
</script>
</body>

<!-- Mirrored from bornwiki.com/themes/born/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2017 04:45:39 GMT -->
</html>