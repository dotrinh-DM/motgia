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
                    var x=document.forms["Form"]["passw"].value;
                    var y=document.forms["Form"]["re-pass"].value;
                    if ($(".form").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                        if(x!==y){
                            evt.preventDefault();
                            document.getElementById("lbpass").focus();
                            alert('Vui lòng nhập lại mật khẩu');
                        }
                });
            });
        </script>			
    </head>
    <body>	
        <?php $this->load->view('layout/header');?>
        <?php 
              $this->load->view($template);//noi dung nam o day
              echo '</section><!--End #content-->';
              ?>
        <div class="clear"></div>
        <?php $this->load->view('layout/footer');?>
    </body>
</html>