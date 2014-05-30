<?php ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery-1.8.2.min.js"></script>
    </head>
    <body>	
        <?php $this->load->view('layout/header'); ?>

        <div id="boxes">
            <div style="top: 199.5px; left: 551.5px; display: none; border: 1px solid;border-radius: 14px;" id="dialog" class="window">
                <div style="width: 45px;height: 45px;float: left;margin: -25px -15px;">
                    <img src="http://localhost:7070/motgia/public/icons/pin_icon.png" style="width: 41px;">
                </div> 
                <div style="float: left;margin-left: 20px;width: 310px;">
                    <center>
                        <span class="headermess" style="float: left;width: 100%;padding: 0px 25px;font-size: 13pt;font-weight: bold;color: #467259;"></span>
                    </center>
                </div>
                <div style="float: right;">
                    <a href="#" class="close"><img src="http://localhost:7070/motgia/public/icons/del.png" style="width: 35px;margin: -14px -12px 0px 0px;float: right;"></a>
                </div>
                <div class="clear" id="contentmess" style="width: 100%;height: 70%;padding: 5px;text-align: center;font-size: 13pt;">
                </div>
            </div>
            <!-- Mask to cover the whole screen -->

            <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
            </div>
        </div>

        <?php
        $this->load->view($template); //noi dung nam o day
        echo '</section><!--End #content-->';
        ?>
        <div class="clear"></div>
        <?php $this->load->view('layout/footer'); ?>
    </body>
</html>