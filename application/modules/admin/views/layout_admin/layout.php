<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/style.default.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript"
<!--            src="--><?php //echo base_url(); ?><!--public/adminstyle/js/jquery-migrate-1.1.1.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery.flot.min.js"></script>
    <script type="text/javascript"
            src="<?php echo base_url(); ?>public/adminstyle/js/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/custom.js"></script>
    <script type="text/javascript"
            src="<?php echo base_url(); ?>public/adminstyle/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery.dataTables.js"></script>


    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper">
    <div class="leftpanel">
        <?php
        $this->load->view('layout_admin/header_left');
        ?>
    </div>
    <!--mainleft-->
    <!-- END OF LEFT PANEL -->

    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">

        <?php
        $this->load->view('layout_admin/header_right');
        ?>
        <div class="maincontent">
            <div class="contentinner content-dashboard">
                <div class="row-fluid">
                    <?php $this->load->view($template); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout_admin/bot'); ?>
</div>
<!--mainwrapper-->
</body>