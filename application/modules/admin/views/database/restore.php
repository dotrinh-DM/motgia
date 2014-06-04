<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/style.default.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/bootstrap-fileupload.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/bootstrap-timepicker.min.css" type="text/css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/forms.js"></script>
<h4 class="widgettitle"> Phục hồi cơ sở dữ liệu </h4>

<div class="widgetcontent" style="margin-left: 150px;">
    <form class="stdform" enctype="multipart/form-data" action="<?php echo site_url('admin/database_controller/restore_db') ?>" method="post">
        <p style="margin-left: 270px;">
            <?php if ($this->session->flashdata('succ')) {
                echo $this->session->flashdata('succ');
            }
            if ($this->session->flashdata('error')) {
                echo $this->session->flashdata('error');
            }
            ?>
        </p>
        <p>
            <label> Tên đăng nhập </label>
            <span class="field"><input type="text" name="username" class="input-large" placeholder="Username"/></span>
        </p>

        <p>
            <label> Mật khẩu </label>
            <span class="field"><input type="password" name="matkhau" class="input-large" placeholder="Password"/></span>
        </p>
        
        <div class="par">
            <label>Chọn file database</label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input span3">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
				<span class="btn btn-file"><span class="fileupload-new">Select file</span>
				<span class="fileupload-exists">Change</span>
				<input type="file" name="dbname"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>
        
        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Restore</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>