<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jqzoom-core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.elastislide.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.jqzoom').jqzoom({
                    zoomType: 'standard',
                    lens: true,
                    zoomWidth: 250,
                    zoomHeight: 200,
                    preloadImages: false,
                    alwaysOn: false
                });
            });
        </script>
<?php
foreach ($data_detail as $value)
    $images1 = json_decode($value->images);
?>
        <section class="bg_shadow">
            <div class="wrap clearfix">
                <div class="title floatLeft">
                    <h6>Chi tiết sản phẩm</h6>
                    <span>Thông tin chi tiết sản phẩm và nhà cung cấp</span>
                </div>
                <div class="clearfix breadcrumbs floatRight">
                    <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a title="Trang nhất" href="/" itemprop="url">
                            <span itemprop="title">Home</span>
                        </a> /
                    </div>
                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                        <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                            <span itemprop="title">Product</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="content" class="wrap">

            <section id="primary">
                <section class="product_detail">
                    <div id="product_view">
                        <a href="uploads/29672_250008_64788_zoom.jpg" class="jqzoom" rel='gal1'  title="triumph">
                            <img class="view" src="uploads/29672_250008_64788.jpg" alt=""  title="triumph"/>
                        </a>
                        <div class="clear">                
                        </div>
                        <div id="sliderthumb">
                            <ul  id="carousel" class="elastislide-list">
                                <li><a  class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29672_250008_64788.jpg',largeimage: './uploads/29672_250008_64788_zoom.jpg'}"><img src="uploads/29672_250008_64788.jpg"/></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/30087_255978_64112.jpg',largeimage: './uploads/30087_255978_64112.jpg'}"><img src="uploads/30087_255978_64112.jpg"/></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}"><img src='uploads/29717_250549_64037.jpg'></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}"><img src='uploads/29717_250549_64037.jpg'></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}"><img src='uploads/29717_250549_64037.jpg'></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}"><img src='uploads/29717_250549_64037.jpg'></a></li>
                            </ul>
                        </div>
                    </div>

                    <section id="product_content">
                        <h1>distracted by the readable content of a page when</h1>
                        <header class="longer_products">
                            <h6 class="icon_longer_products">Còn hàng</h6>
                            <h6 class="">Mã sản phẩm : 9999</h6>
                        </header>
                        <div class="subdetail">
                            Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean
                        </div>

                        <div class="price_3">
                            Giá:
                            <span class="new_price"> $20</span>
                        </div>

                        <div id="addCart">
                            <form action="" method="POST">
                                <label for="qty">Số lượng</label>
                                <input id="down" type="button" value="<"/>
                                <input id="qty" type="text" value="1"/>
                                <input id="up" type="button" value=">"/>
                                <div>
                                    <input id="btnAdd" type="submit" value="Buy now" />
                                </div>
                            </form>
                        </div>
                        <div class="social_02">
                            <img src="uploads/lienket.jpg"/>
                        </div>
                    </section>
                    <div class="clear"></div>
                    <div id="tab-container" class='tab-container'>
                        <ul class='etabs'>
                            <li class='tab active' ><a href="#tabs1-html">Thông tin sản phẩm</a></li>
                            <li class='tab'><a href="#tabs1-js">Bình luận</a></li>
                            <li class='tab'><a href="#tabs1-css">Nhà cung cấp</a></li>
                        </ul>
                        <div class='panel-container'>
                            <div class="position">
                                <div id="tabs1-html">
                                    <div class="detail_item">
                                        <h6 class="title_detail_item">Highlights</h6>
                                        <ul>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="detail_item">
                                        <h6 class="title_detail_item">Highlights</h6>
                                        <ul>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                        </ul>
                                    </div><!--End .detail_item -->
                                    <hr class="line_full"/>
                                    <div class="detail_item_post">
                                        <header class="title_post_detail">Detail information</header>
                                        <p>
                                            Sating famished diners late into the wee hours of weekends,
                                            Charly T's keep insomniacs and overworked office staff well-fed 
                                            with hassle-free and flavour-rich international fare. 
                                            Take a break from the fastlane with the Mom's Chicken Soup ($8), 
                                            and move on to their famous Rotisserie Chicken (from $14.50 for a 
                                            Quarter Chicken with 2 Sauces and 2 Additions). 
                                        </p>
                                        <figure class="img_center"><img src="uploads/product_1.png"/></figure>
                                        <p>
                                            Sating famished diners late into the wee hours of weekends,
                                            Charly T's keep insomniacs and overworked office staff well-fed 
                                            with hassle-free and flavour-rich international fare. 
                                            Take a break from the fastlane with the Mom's Chicken Soup ($8), 
                                            and move on to their famous Rotisserie Chicken (from $14.50 for a 
                                            Quarter Chicken with 2 Sauces and 2 Additions). 
                                        </p>
                                        <figure class="img_center"><img src="uploads/product_4.png"/></figure>
                                    </div>


                                </div>
                            </div>
                            <div id="tabs1-js">
                                <div class="fb-comments" data-href="http://example.com/comments" data-width="673px" data-numposts="5" data-colorscheme="light"></div>

                            </div>
                            <div id="tabs1-css">
                                <div class="detail_item">
                                    <h6 class="title_detail_item">Thông tin Nhà cung cấp</h6>
                                    <ul>
                                        <li>Address:11 Unity Street, #01-30,Robertson Walk, Singapore 237995</li>
                                        <li>Tel: 6235 6787</li>
                                        <li><a  href="#">Website: 123.com</a></li>
                                    </ul>
                                </div>
                                <div class="detail_item">
                                    <h6 class="title_detail_item">Bản đồ</h6>
                                    <div class="address_maps">
                                        <img src="uploads/maps.png" alt=""/>
                                    </div>
                                </div><!--End .detail_item -->
                                <div class="clear"></div>
                                <div class="detail_item_post clearfix">
                                    <header class="title_post_detail">Gửi góp ý</header>
                                    <form class="form floatLeft">
                                        <div>
                                            <label>Tên<span>*</span></label>
                                            <input id="fullname" name="fullname" type="text" placeholder="Tên liên hệ" value="" size="40" required="">
                                            <span class="tooltip">Không được để trống</span>
                                            </div>
                                        <div>
                                            <label>Số điện thoại<span>*</span></label>
                                            <input id="phone" name="phone" type="text" placeholder="phone" value="" size="11" required>
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div>
                                            <label>Email<span>*</span></label>


                                            <input id="email" name="email" type="email" placeholder="acb@gmail.com" value="" size="40" required="">
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div>
                                            <label>Góp ý<span>*</span></label>
                                            <textarea id="content" name="content" placeholder="comment tại đây" cols="40" rows="8" required="">

                                            </textarea>
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div style="text-align: right;">
                                            <input type="submit" value="send"/>
                                        </div>
                                    </form>
                                    <div  class="floatRight note">
                                        <i>IT is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section><!-- .End product_detail -->

            </section><!--End #primary-->
            <aside id="sidebar">
                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="uploads/product_1.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>
                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="uploads/product_2.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>

                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="uploads/product_3.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>

                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="uploads/product_4.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>
            </aside><!--End #sidebar--> 
            <div class="clear"></div>
    <?php $this->load->view('layout/sidebar'); ?>
<div class="clear"></div>