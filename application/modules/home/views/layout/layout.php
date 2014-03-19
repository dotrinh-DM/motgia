<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/gallery.js"></script>

        <script src="<?php echo base_url(); ?>template/js/change.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/idangerous.swiper-2.0.min.js"></script>
        <script src="<?php echo base_url(); ?>template/js/idangerous.swiper.3dflow-2.0.js"></script>
         <script src="<?php echo base_url(); ?>template/js/modernizr.custom.28468.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/jquery.cslider.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/jquery.hashchange.min.js" type="text/javascript"></script>
        <script>
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                loop: true,
                //Enable 3D Flow
                tdFlow: {
                    rotate: 30,
                    stretch: 10,
                    depth: 150,
                    modifier: 1,
                    shadows: true
                }
            })
        </script>
        
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#da-slider').cslider({
                    autoplay: true,
                    bgincrement: 450
                });
                $(".formlogin").h5Validate({
                    errorClass: "validationError",
                    validClass: "validationValid"
                });
                $(".formlogin").submit(function(evt) {
                    if ($(".formlogin").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                });
                $('#tab-container').easytabs();
                jQuery('#carousel').elastislide();

        jQuery('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens: true,
            preloadImages: false,
            alwaysOn: false
        });
            });
        </script>	
        <script src="<?php echo base_url(); ?>template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/scroll-jquery.js" type="text/javascript"></script>
       
    </head>
    <body>	
        <?php $this->load->view('layout/header'); ?>
        <?php
        $this->load->view($template); //noi dung nam o day
        echo '</section><!--End #content-->';
        ?>
        <div class="clear"></div>
        <?php $this->load->view('layout/footer'); ?>
    </body>
</html>