
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
<script src="<?php echo base_url(); ?>js/responsiveslides.js"></script>
 <script src="<?php // echo base_url(); ?>js/responsiveslides.min.js"></script>
        <script src="<?php // echo base_url(); ?>js/responsiveslides.js"></script>
        <script type="text/javascript">
            $(function() {
                //More Button
                $('.btn_showmore').live("click", function()
                {
                    var ID = $(this).attr("id");
                    if (ID)
                    {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('home/cproducts/show_more'); ?>",
                            data: "idl=" + ID,
                            cache: false,
                            success: function(html) {
                                $("#content_index").append(html);
                                $("#more" + ID).remove();
                            }
                        });
                    }
                    else
                    {
                        $(".text_center").html('The End');
                    }
                    return false;
                });
                $(".btn_readmore").live("click", function() {
                    var idpro = $(this).attr("id");
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('home/cproducts/addcart'); ?>",
                        data: "idpro=" + idpro,
                        success: function(kq) {
                            alert('Thêm vào giỏ hàng thành công!');
                            $("#choxemgiohang").html(kq);
                        }
                    });
                });

                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });

        </script>
<div id="bg-slideshow">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="<?php echo base_url(); ?>template/images/1.jpg" alt="">

            </li>
            <li>
                <img src="<?php echo base_url(); ?>template/images/2.jpg" alt="">

            </li>
            <li>
                <img src="<?php echo base_url(); ?>template/images/3.jpg" alt="">

            </li>
            <li>
                <img src="<?php echo base_url(); ?>template/images/4.jpg" alt="">

            </li>
        </ul>
    </div>  
</div>
<section id="content" class="wrap_2">
    <header class="Nav_content">
        <a href="#">Sản phẩm nổi bật</a>
        <a href="#">Sản phẩm mới</a>
        <a href="#">Sản phẩm bán chạy</a>
    </header><!--End .Nav_content-->
    <div id="content_index">
        <?php
        foreach ($data_home as $value) {
            $img = json_decode($value->images);
            ?>
            <section class="module">
                <div class="module_item clearfix">
                    <a href="<?php echo site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID"); ?>" class="img_module">
                        <img src="<?php echo base_url() . $img[0]; ?>" alt="<?php echo $value->name ?>"/>
                    </a>
                    <div class="reduced">
                        <header class="title_item"><a href="<?php echo site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID"); ?>"><?php echo $value->name ?></a></header>
                        <p><?php echo substr($value->intro2, 0, strrpos($value->intro2, ' ')); ?>...</p>
                    </div><!--End .reduced-->
                    <a style="cursor: pointer" id="<?php echo $value->productsID; ?>" class="btn_readmore">Đặt Mua</a>
                    <span class="price"><?php echo $value->price ?>K</span>
                </div><!--End .module_item-->
            </section><!--End .module-->
<?php } ?> 
    </div>
    <div class="text_center" id="more<?php echo $value->productsID ?>" >
        <button class="btn_showmore" id="<?php echo $value->productsID ?>">Xem thêm</button>
    </div>
