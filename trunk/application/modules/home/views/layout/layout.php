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
            });
        </script>	
<!--        <script type="text/javascript" src="<?php echo base_url() ?>tinymce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                // General options 
                mode: "textareas", //textareas, exact 
                theme: "advanced",
                plugins: "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,imagemanager",
                // Theme options 
                theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
                theme_advanced_buttons2: "bullist,numlist,|,outdent,indent,blockquote,|link,unlink,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                theme_advanced_buttons3: "|,sub,sup,|,charmap,emotions,iespell",
                theme_advanced_toolbar_location: "top",
                theme_advanced_toolbar_align: "left",
                theme_advanced_statusbar_location: "bottom",
                theme_advanced_resizing: true
            });
        </script>-->
        <script src="<?php echo base_url(); ?>template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/scroll-jquery.js" type="text/javascript"></script>
       
        <script type="text/javascript">

            jQuery(document).ready(function() {
                //
                jQuery('#da-slider').cslider({
                    autoplay: true,
                    bgincrement: 450
                });
                //
                $(".form").h5Validate({
                    errorClass: "validationError",
                    validClass: "validationValid"
                });

                // Prevent form submission when errors
                $(".form").submit(function(evt) {
                    if ($(".form").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                });
                jQuery('#carousel').elastislide({
                    autoplay:true
                });

                jQuery('.jqzoom').jqzoom({
                    zoomType: 'standard',
                    lens: true,
                    preloadImages: false,
                    alwaysOn: false
                   
                });

                $('#tab-container').easytabs();

            });
        </script>
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