<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/style.default.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/bootstrap-fileupload.min.css"
      type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/bootstrap-timepicker.min.css"
      type="text/css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/adminstyle/js/forms.js"></script>
<style>
    ul li {
        list-style-type: none
    }

    /** Tables (classified as "sTable") **/
    table.sTable {
        width: 311px;
        margin: 0 0 0 -10px;
        border-collapse: collapse;
    }

    table.sTable td {
        border-top: 1px solid #dfdfdf;
        text-align: center;
        font-size: 0.9em;
        padding: 5px 0;
        margin: 0;
        color: #999;
    }

    table.sTable td:first-child {
        text-align: left;
        padding: 0 0 0 15px;
    }

    table.sTable tr.oddRow {
        background: url(images/bg_tableRow.gif) repeat-x 0px 1px;
    }

    td.firstCol a {
        color: #9aa685;
        font-weight: bold;
    }

    td.firstCol a:hover {
        text-decoration: none;
    }

    td.secondCol a {
        color: #ab8617;
        text-decoration: none;
        border-bottom: 1px solid #cbbb7c;
    }

    td.secondCol a:hover {
        border-bottom-color: #ab8617
    }

    td.editItem {
        width: 120px;
    }

    td.editItem ul li {
        float: left;
        margin-right: 13px;
        padding-left: 18px;
    }

    td.editItem ul li a {
        color: #666;
        text-decoration: none;
        display: block;
    }

    li.iconEdit {
        background: url(images/icon_edit.gif) no-repeat;
    }

    li.iconDel {
        background: url(images/icon_delete.gif) no-repeat 2px 3px;
    }

    a.deleteLink {
        color: #c04e1e;
        text-decoration: none;
    }

    a.deleteLink:hover {
        text-decoration: underline;
    }
</style>
<h4 class="widgettitle"> Sửa sản phẩm </h4>

<div class="widgetcontent">
    <form class="stdform" enctype="multipart/form-data" action="<?php echo site_url('admin/product_controller/updateProducts') ?>" method="post">
        <?php foreach ($product as $pro) ?>
        <input type="hidden" name="idproduct" value="<?php echo $pro->productsID; ?> " />
        <p>
            <label> Tên </label>
            <span class="field"><input type="text" name="txtname" class="input-large" value="<?php echo $pro->name; ?>"/></span>
        </p>

        <p>
            <label> Giá </label>
            <span class="field"><input type="text" name="txtprice" class="input-large" value="<?php echo $pro->price; ?>"/></span>
        </p>


        <p>
            <label> Số lượng </label>
                <span class="field"><input type="text" name="soluong" class="input-large" value="<?php echo $pro->quantity; ?>"/></span>
        </p>
<?php $arr_img = json_decode($pro->images); ?>

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
				<input type="file" name="img0"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <img src="<?php echo base_url().$arr_img[0]; ?>" style="width: 150px;height: 150px;margin-left: 300px;" />
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
				<input type="file" name="img1"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <img src="<?php echo base_url().$arr_img[2]; ?>" style="width: 150px;height: 150px;margin-left: 300px;" />
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
				<input type="file" name="img2"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <img src="<?php echo base_url().$arr_img[2]; ?>" style="width: 150px;height: 150px;margin-left: 300px;" />
        </div>

        <p>
            <label> Giới thiệu </label>
            <span class="field">
                <textarea id="autoResizeTA" cols="80" name="txtdes" rows="5" class="span5" style="resize: vertical"><?php echo $pro->intro; ?></textarea></span>
        </p>

        <p>
            <label> Nổi bật </label>
            <span class="field"><textarea id="autoResizeTA" cols="80" name="noibat" rows="5" class="span5"
                                          style="resize: vertical"><?php echo $pro->hightlight; ?></textarea></span>
        </p>

        <p>
            <label> Điều kiện </label>
            <span class="field"><textarea id="autoResizeTA" cols="80" name="dieukien" rows="5" class="span5"
                                          style="resize: vertical"><?php echo $pro->condition; ?></textarea></span>
        </p>

        <p>
            <label>Chi tiết sản phẩm</label>
                            <span class="field">
                                <textarea cols="80" rows="5" id="textarea2" name="chitiet" class="span5"><?php echo $pro->productinfo; ?></textarea>
                            </span>
        </p


        <p>
            <?php
            $check = '';
            echo '<table>';
            foreach ($data as $value)
            {
                $checked = '';
                foreach ($product_in_cate as $value22)
                {

                    if ($value22->categoryID == $value->categoryID)
                    {
                        $checked = 'checked';
                    }
                }
                ?>
                <input style="margin-left: 300px;" type="checkbox" name='danhmuc[]' <?php echo $checked ?> value="<?php echo $value->categoryID ?>"/><?php echo $value->category_name ?> <br/>
            <?php

            }
            echo '</table>';
            ?>
        </p>

        <p>
            <label> Trạng thái </label>
                            <span class="field">
                            <select name="status" class="uniformselect">
                                <option value="">Chọn</option>
                                <option
                                    <?php if ($pro->status == 1) {
                                        echo 'selected';
                                    } ?>
                                    value="1">Hiện</option>
                                <option
                                    <?php if ($pro->status == 0) {
                                        echo 'selected';
                                    } ?>
                                    value="0">Ẩn</option>
                            </select>
                            </span>
        </p>

        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>