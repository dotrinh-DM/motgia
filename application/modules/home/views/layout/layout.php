<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/style.css" />
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/validateh5.js"></script><!-- Slideshow -->
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/gallery.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                $(".form").h5Validate({
                    errorClass: "validationError",
                    validClass: "validationValid"
                });
                $(".form").submit(function(evt) {
                    if ($(".form").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                });
            });
        </script>			
    </head>
    <body>	
        <?php $this->load->view('layout/header');?>
         
        <div class="wrap clearfix">
        <?php 
              $this->load->view('layout/title');  
              echo '<section id="content" class="wrap">';
              $this->load->view($template);//noi dung nam o day
              $this->load->view('layout/sidebar');?>
        </div>
         </section>
        <?php $this->load->view('layout/footer');?>
    </body>
</html>