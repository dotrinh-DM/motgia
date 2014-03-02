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
       <?php
         echo form_open_multipart('home/cproducts/updateProducts');?>
        
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
                            <?php
                            foreach ($cate as $value) { ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
<?php foreach ($edit as $value) $images = json_decode($value->images) ?>
                <input type="hidden" name="idhidden" value="<?php echo $value->id ?>" />
                <div class="floatLeft">
                    <label>Số lượng<span>*</span></label>
                    <div class="select width_40">
                        <input type="text" name="soluong" value="<?php echo $value->quantity ?>"/>
                        <span class="tooltip">Không được để trống</span>
                    </div>
                </div>
                <div class="clear"></div>

                <div>
                    <label>Tên sản phẩm<span>*</span></label>
                    <input type="text" name="tensanpham" value="<?php echo $value->name ?>"/>
                </div>
                <div>
                    <label>Mô tả ngắn<span>*</span></label>
                    <textarea name="motangan"><?php echo $value->intro ?></textarea>
                </div>

                <div class="photo_uploads">
                    <h6>Ảnh sản phẩm<span class="color_red">*</span></h6>
                    <ul class="detail_photo_uploads">
                        <li>
                            <label>Ảnh 1</label>
                            <div class="bg-file">
                                <input type="file" name="img[]"/>
                            </div>
                            <img src="<?php echo base_url().$images[0] ;?>" alt="<?php echo $value->name ?>" />
                        </li>
                        <li>
                            <label>Ảnh 2</label>
                            <div class="bg-file">
                                <input type="file" name="img[]"/>
                            </div>
                            <img src="<?php echo base_url().$images[1] ;?>" alt="<?php echo $value->name ?>" />
                        </li>
                        <li>
                            <label>Ảnh 3</label>
                            <div class="bg-file">
                                <input type="file" name="img[]"/>
                            </div>
                            <img src="<?php echo base_url().$images[2] ;?>" alt="<?php echo $value->name ?>" />
                        </li>
                    </ul>
                </div>


            </div> <!--End #tabs 1-->
            <header class="title_form">
                <span>Chi tiết sản phẩm</span>
            </header>
            <div id="tabs-2">
                    <div>
                        <label>Đặc điểm nổi bật<span>*</span></label>
                        <textarea class="content_add" name="dacdiemnb"><?php echo $value->hightlight ?></textarea>
                    </div>
                    <div>
                        <label>Điều kiện sử dụng <span>*</span></label>
                        <textarea class="content_add" name="dieukiensd"><?php echo $value->condition ?></textarea>
                    </div>
                    <div>
                        <label>Chi tiết sản phẩm <span>*</span></label>
                        <textarea class="content_add" name="chitietsp"><?php echo $value->productinfo ?></textarea>
                    </div>
                
            </div><!--End #tabs-2-->

        </div> <!--End #tabs-->
        <div>
            <input type="submit" name="btnok" value="Đăng tin"/>
        </div>
        <?php echo form_close();?><!--End #add_product-->
    </section><!--End #primary-->
    <?php $this->load->view('layout/sidebar'); ?>
    <div class="clear"></div>
</section><!--End #content-->