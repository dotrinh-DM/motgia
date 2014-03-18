<div id="bg-slideshow">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($data_slide as $slide) { $images = json_decode($slide->images); ?>
            <div class="swiper-slide" style="background-image:url(<?php echo base_url().$images[0]; ?>)">
                <a href="#" target="_blank"></a><!--
            --></div>
            <?php }?>
        </div>
    </div>
</div>   


<section id="content" class="wrap_2">
    <header class="Nav_content">
        <a href="#">All (200)</a>
        <a href="#">man (20)</a>
        <a href="#">woman (21)  </a>
        <a href="#">kids (11) </a>
        <a href="#">fashion (12) </a>
        <a href="#">new (10) </a>
        <a href="#">sale (10) </a>
    </header><!--End .Nav_content-->
    <div id="content_index">
        
           <?php foreach ($data_home as $value) { $img = json_decode($value->images); ?>
            
            <section class="module">
                <div class="module_item clearfix">
                    <a href="#" class="img_module">
                        <img src="<?php echo base_url().$img[0]; ?>" alt="<?php echo $value->name ?>"/>
                    </a>
                    <div class="reduced">
                        <header class="title_item"><a href="#"><?php echo $value->name ?></a></header>
                        <p><?php echo $value->intro?></p>
                    </div><!--End .reduced-->
                    <a href="#" class="btn_readmore">Chi tiết</a>
                    <span class="price"><?php echo $value->price ?>K</span>
                </div><!--End .module_item-->
            </section><!--End .module-->
        <?php } ?>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="text_center">
        <button class="btn_showmore">Xem thêm</button>
    </div>

    <script src="<?php echo base_url(); ?>template/js/idangerous.swiper-2.0.min.js"></script>
    <script src="<?php echo base_url(); ?>template/js/idangerous.swiper.3dflow-2.0.js"></script>
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