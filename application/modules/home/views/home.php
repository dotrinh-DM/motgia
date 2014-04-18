<div id="bg-slideshow">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($data_slide as $slide) {
                $images = json_decode($slide->images); ?>
                <div class="swiper-slide" style="background-image:url(<?php echo base_url() . $images[0]; ?>)">
                    <a href="<?php echo site_url("home/cproducts/showDetailProducts/$slide->productsID/$slide->categoriesID"); ?>"></a><!--
                    --></div>
<?php } ?>
        </div>
    </div>
</div>   
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
        //More Button
        $('.btn_showmore').live("click", function()
        {
            var ID = $(this).attr("id");
            if (ID)
            {
//                            $("#more" + ID).html('<img src="moreajax.gif" />');
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
    });

</script>
<section id="content" class="wrap_2">
    <header class="Nav_content">
        <a href="#">Sản phẩm nổi bật</a>
        <a href="#">Sản phẩm mới</a>
        <a href="#">Sản phẩm bán chạy</a>
    </header><!--End .Nav_content-->
    <div id="content_index">
<?php foreach ($data_home as $value) {
    $img = json_decode($value->images); ?>
            <section class="module">
                <div class="module_item clearfix">
                    <a href="<?php echo site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID"); ?>" class="img_module">
                        <img src="<?php echo base_url() . $img[0]; ?>" alt="<?php echo $value->name ?>"/>
                    </a>
                    <div class="reduced">
                        <header class="title_item"><a href="<?php echo site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID"); ?>"><?php echo $value->name ?></a></header>
                        <p><?php echo substr($value->intro2, 0, strrpos($value->intro2, ' ')); ?>...</p>
                    </div><!--End .reduced-->
                    <a href="<?php echo site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID"); ?>" class="btn_readmore">Chi tiết</a>
                    <span class="price"><?php echo $value->price ?>K</span>
                </div><!--End .module_item-->
            </section><!--End .module-->
<?php } ?> 
    </div>
    <div class="text_center" id="more<?php echo $value->productsID ?>" >
        <button class="btn_showmore" id="<?php echo $value->productsID ?>">Xem thêm</button>
    </div>

    <script src="<?php echo base_url(); ?>public/homejs/idangerous.swiper-2.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/homejs/idangerous.swiper.3dflow-2.0.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            loop: true,
            //Enable 3D Flow
            tdFlow: {
                rotate: 30,
                stretch: 10,
                depth: 150,
                modifier: 1,
                shadows: true
            }
        })
    </script>