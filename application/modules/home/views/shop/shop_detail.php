<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Thăm gian hàng </h6>
            <span>Gian hàng</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="<?php echo site_url('trang-chu')?>" itemprop="url">
                    <span itemprop="title">Trang chủ/</span>
                </a>
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="<?php echo site_url('home/cshop/listshop')?>" title="Danh sách gian hàng" itemprop="url">
                    <span itemprop="title">gian hàng/</span>
                </a>
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                    <span itemprop="title"><?php echo $shop_detail['company']?></span>
            </div>
        </div>
    </div>
</section>

<section id="content" class="wrap">
    <div id="list_pavilion" class="clearfix">
        <div id="avatar_img" class="floatLeft">
            <div id="avt"><img height="200px" width="200px" src="<?php echo base_url() . $shop_detail['image'] ?>"/></div>
            <img src="<?php echo site_url('template/images/ok.png') ?>" class="floatLeft"/>
            <h4 ><?php echo $shop_detail['fullname'] ?></h4>
        </div>
        <div id="text" class="floatLeft clearfix">
            <h4 style="font-size: 12px;font-weight: bold;"><a href="#"><?php echo $shop_detail['company'] ?></a></h4>
            <p class="adress"><?php echo $shop_detail['address'] . ', ' . $shop_detail['city'] ?></p>
            <p>Có <span class="quantity"><?php echo $shop_detail['num_pro'] ?> </span>sản phẩm trong <a href="#">Thời trang nam</a></p>
            <p>Điện thoại : <?php echo $shop_detail['phone'] ?></p>
            <p>Fax : 04-36473147</p>
            <a href="#"><?php echo $shop_detail['website'] ?></a><br><br>
            <p>Đánh giá:<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></p>
            <?php if(isset($shopper) && $shopper['shopID'] == $shop_detail['shopID']){?><p><button class="btn" onclick="location.href='<?php echo site_url('home/cshop')?>'">Quản trị gian hàng</button></p><?php }?>
        </div>
    </div>

    <header class="title_form">
        <span>Sản phẩm đã đăng</span>
    </header>
    <div class='panel-container'>
        <div id="tabs1-html">
            <?php
            if (isset($product) && count($product)) {
                foreach ($product as $key => $value) {
                    $img = json_decode($value['images']);
                    echo '
                        <section class="module">
                            <div class="module_item clearfix">
                                <a href="'.  base_url().'san-pham/'.$value['productsID'].'" class="img_module">
                                    <img src="'.  base_url().$img[0].'" alt="000"/>
                                </a>
                                <div class="reduced">
                                    <header class="title_item"><a href="'.  base_url().'san-pham/'.$value['productsID'].'">'.$value['name'].'</a></header>
                                    <div style="height: 55px;overflow: hidden;">'.$value['intro'].'</div>
                                </div><!--End .reduced-->
                                <a href="'.  base_url().'san-pham/'.$value['productsID'].'" class="btn_readmore">Chi tiết</a>
                                <span class="price">100K</span>
                            </div><!--End .module_item-->
                        </section><!--End .module-->';
                }
            }
            ?>
        </div> <!--End #tabs 1-->
    </div>

    <div class="clear"></div>
</section><!--End #content-->
