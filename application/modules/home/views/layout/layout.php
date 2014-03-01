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
                
                $(".formlogin").h5Validate({
                    errorClass: "validationError",
                    validClass: "validationValid"
                });
                $(".formlogin").submit(function(evt) {
                    if ($(".formlogin").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                });
            });
        </script>	
        <script type="text/javascript" src="<?php echo base_url() ?>tinymce/tiny_mce.js"></script>
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