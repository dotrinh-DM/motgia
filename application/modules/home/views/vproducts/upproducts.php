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
<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Đăng tin </h6>
            <span>Đăng tin bán sản phẩm</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Home</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Đăng tin</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <div style="color: #6666ff; text-align: center;font-size: 20px;margin-top: 20px;">
        <?php
        if ($this->session->flashdata('addproduct_alert'))
            echo $this->session->flashdata('addproduct_alert');
        ?>
    </div>
    <section id="primary">
        <form method="post" action="<?php echo site_url('home/cproducts/insertProducts'); ?>" enctype="multipart/form-data" id="up_form"/>
        <div id="tabs" class="tabs">
            <div class="position">
                <header class="title_form">
                    <span>Thông tin sản phẩm</span>
                </header>
            </div>
            <div id="tabs-1" class="ui-tabs">
                <div class="floatLeft marginRight_50">
                    <label>Danh mục<span>*</span></label>
                    <div class="select width_200">
                        <select name="danhmuc">
                            <?php foreach ($cate as $value) { ?>
                                <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="floatLeft">
                    <label>Số lượng<span>*</span></label>
                    <input type="text" name="soluong" value="<?php if (isset($_POST['soluong'])) {
                                echo $_POST['soluong'];
                            } ?>"/>
                </div>
                <div class="clear"></div>

                <div>
                    <label>Tên sản phẩm<span>*</span></label>
                    <input type="text" name="tensanpham" value="<?php if (isset($_POST['tensanpham'])) {
                                echo $_POST['tensanpham'];
                            } ?>"/>
                </div>
<?php echo '<b>' . form_error('tensanpham') . '</b>'; ?>
                <div>
                    <label>Mô tả ngắn<span>*</span></label>
                    <textarea name="motangan"><?php if (isset($_POST['motangan'])) {
    echo $_POST['motangan'];
} ?></textarea>
                </div>
<?php echo '<b>' . form_error('motangan') . '</b>'; ?>
                <div class="photo_uploads">
                    <h6>Ảnh sản phẩm<span class="color_red">*</span></h6>
                    <ul class="detail_photo_uploads">
                        <li>
                            <label>Ảnh 1</label>
                            <div class="bg-file">
                                <input type="file" name="img1" id="img1" accept="image/*"/>
                            </div>
                            <div id="noti-img1"></div>
                        </li>
                        <li>
                            <label>Ảnh 2</label>
                            <div class="bg-file">
                                <input type="file" name="img2" id="img2" accept="image/*"/>
                            </div>
                            <div id="noti-img2"></div>
                        </li>
                        <li>
                            <label>Ảnh 3</label>
                            <div class="bg-file">
                                <input type="file" name="img3" id="img3" accept="image/*"/>
                            </div>
                            <div id="noti-img3"></div>
                        </li>
                    </ul>
<?php if (isset($thongbao)) {
    echo '<b>' . $thongbao . '</b>';
} ?>
                </div>


            </div> <!--End #tabs 1-->
            <header class="title_form">
                <span>Chi tiết sản phẩm</span>
            </header>
            <div id="tabs-2">
                <div>
                    <label>Đặc điểm nổi bật<span>*</span></label>
                    <textarea class="content_add" name="dacdiemnb" ><?php if (isset($_POST['dacdiemnb'])) {
    echo $_POST['dacdiemnb'];
} ?></textarea>
<?php echo form_error('dacdiemnb'); ?>
                </div>
                <div>
                    <label>Điều kiện sử dụng <span>*</span></label>
                    <textarea class="content_add" name="dieukiensd" ><?php if (isset($_POST['dieukiensd'])) {
    echo $_POST['dieukiensd'];
} ?></textarea>
                </div>
                <div>
                    <label>Chi tiết sản phẩm <span>*</span></label>
                    <textarea class="content_add" name="chitietsp" ><?php if (isset($_POST['chitietsp'])) {
    echo $_POST['chitietsp'];
} ?></textarea>
                </div>

            </div><!--End #tabs-2-->

        </div> <!--End #tabs-->
        <div>
            <input type="submit" name="btnok" value="Đăng tin"/>
        </div>
<?php echo form_close(); ?><!--End #add_product-->
    </section><!--End #primary-->
<?php $this->load->view('layout/sidebar'); ?>
    <div class="clear"></div>
</section><!--End #content-->