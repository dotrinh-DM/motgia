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
<h4 class="widgettitle"> Thêm sản phẩm </h4>

<div class="widgetcontent">
    <form class="stdform" action="<?php echo site_url('admin/user_controller/formSubmit') ?>" method="post">
        <p>
            <label> Tên </label>
            <span class="field"><input type="text" name="ho" class="input-large" placeholder="Lastname"/></span>
        </p>

        <p>
            <label> Số lượng </label>
            <span class="field"><input type="text" name="ten" class="input-large" placeholder="Firstame"/></span>
        </p>

        <p>
            <label> Giá </label>
            <span class="field"><input type="text" name="mail" class="input-large" placeholder="Email"/></span>
        </p>


        <div class="par">
            <label>Ảnh 1</label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input span3">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
				<span class="btn btn-file"><span class="fileupload-new">Select file</span>
				<span class="fileupload-exists">Change</span>
				<input type="file"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>
        <div class="par">
            <label>Ảnh 2</label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input span3">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
				<span class="btn btn-file"><span class="fileupload-new">Select file</span>
				<span class="fileupload-exists">Change</span>
				<input type="file"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>
        <div class="par">
            <label>Ảnh 3</label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input span3">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
				<span class="btn btn-file"><span class="fileupload-new">Select file</span>
				<span class="fileupload-exists">Change</span>
				<input type="file"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>

        <p>
            <label> Giới thiệu </label>
            <span class="field"><textarea id="autoResizeTA" cols="80" rows="5" class="span5" style="resize: vertical"></textarea></span>
        </p>

        <p>
            <label> Nổi bật </label>
            <span class="field"><textarea id="autoResizeTA" cols="80" rows="5" class="span5" style="resize: vertical"></textarea></span>
        </p>

        <p>
            <label> Điều kiện </label>
            <span class="field"><textarea id="autoResizeTA" cols="80" rows="5" class="span5" style="resize: vertical"></textarea></span>
        </p>

        <p>
            <label>Chi tiết sản phẩm</label>
                            <span class="field">
                                <textarea cols="80" rows="5" id="textarea2" class="span5"></textarea>
                            </span>
        </p

        <p>
            <label>Danh mục</label>
                            <span class="field">
                            <select name="gioitinh" class="uniformselect">
                                <option value="">Chọn</option>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                            </span>
        </p>

        <p>
            <label> Trạng thái </label>
                            <span class="field">
                            <select name="gioitinh" class="uniformselect">
                                <option value="">Chọn</option>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                            </span>
        </p>

        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>