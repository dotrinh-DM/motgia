<?php ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery-1.8.2.min.js"></script>

<!--        <script type="text/javascript" src="<?php // echo base_url(); ?>template/js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="<?php // echo base_url(); ?>template/js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="<?php // echo base_url(); ?>template/js/gallery.js"></script>
        <script src="<?php // echo base_url(); ?>template/js/change.js" type="text/javascript"></script>
        <script src="<?php // echo base_url(); ?>template/js/modernizr.custom.28468.js" type="text/javascript"></script>
        <script src="<?php // echo base_url(); ?>template/js/jquery.cslider.js" type="text/javascript"></script>
        <script src="<?php // echo base_url(); ?>template/js/jquery.hashchange.min.js" type="text/javascript"></script>-->
       

<!--	
        <script src="<?php // echo base_url(); ?>template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="<?php // echo base_url(); ?>template/js/scroll-jquery.js" type="text/javascript"></script>-->

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