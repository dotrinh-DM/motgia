<script type="text/javascript">
    $(function() {
        //More Button
        $('.btn_showmore').live("click", function() {
            var ID = $(this).attr("id");
            if (ID) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cproducts/result_more').'?key='.$_GET['key']; ?>",
                    data: "start=" + ID,
                    cache: false,
                    success: function(html) {
                        $("#content_index").append(html);
                        $("#more" + ID).remove();
                    }
                });
            }
            else {
                $(".text_center").html('The End');
            }
            return false;
        });
    });
</script>
<section id="content" class="wrap_2">
    <p style="font-weight: bold;border-bottom: 1px solid aquamarine;margin-bottom: 25px;width: 930px;">Có <?php echo count($result)?> kết quả tìm kiếm sản phẩm với từ khóa <i>"<?php echo urldecode($_GET['key'])?>"</i></p>
    <!--End .Nav_content-->
    <div id="content_index">
        <?php
        foreach ($result as $value) {
            $img = json_decode($value->images);
            ?>
            <section class="module" style="height: 205px">
                <div class="module_item clearfix">
                    <a href="<?php echo site_url("san-pham/$value->productsID"); ?>" style="height: 185px"
                       class="img_module">
                        <img src="<?php echo base_url() . $img[0]; ?>" alt="<?php echo $value->name ?>"/>
                    </a>

                    <div class="reduced">
                        <header class="title_item" style="height: 25px;"><a
                                href="<?php echo site_url("san-pham/$value->productsID"); ?>"><?php echo $value->name ?></a>
                        </header>
                        <div style="height: 50px;overflow: hidden;">
                            <span><?php echo substr($value->intro, 0, strrpos($value->intro, ' ')); ?></span> ...
                        </div>
                    </div>
                    <!--End .reduced-->
                    <a style="cursor: pointer" id="<?php echo $value->productsID; ?>" class="btn_readmore">Đặt Mua</a>

                    <span class="price"><?php echo $value->price ?>K</span>

                    <div style="width: 185px;margin: 55px 0px;overflow: hidden;" class="clearfix"><a href="#" style="color: #848CEC"><b><?php echo $value->company; ?></b></a>
                    </div>
                </div>
                <!--End .module_item-->
            </section><!--End .module-->
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="text_center" id="more10">
        <center><button class="btn_showmore" id="10">Xem thêm</button></center>
    </div>
    <?php
    if (!isset($_COOKIE['hello'])) {
        ?>
        <style>
            .dim {
                height: 100%;
                width: 100%;
                position: fixed;
                left: 0;
                top: 0;
                z-index: 1 !important;
                background-color: black;
                filter: alpha(opacity=75); /* internet explorer */
                -khtml-opacity: 0.75; /* khtml, old safari */
                -moz-opacity: 0.75; /* mozilla, netscape */
                opacity: 0.75; /* fx, safari, opera */
            }

            .dialog_wrapper {
                width: 100%;
                top: 0px;
                left: 0px;
                position: absolute;
                z-index: 5;
                display: block;
                margin-top: -200px;
            }

            .dialog {
                width: 900px;
                margin: 0 auto;
                background-color: #fff;
                border: 1px solid #ccc;
                color: #333;
            }
        </style>
        <div class="dim" title="Event">
        </div>

        <div class="dialog_wrapper">


            <div class="dialog"><img src="<?php echo base_url() . 'public/Welcome.jpg'; ?>" alt="Welcome"
                                     /><br/><br/>
                <center style="margin-top: -50px;"><a href="<?php echo site_url('home/chome'); ?>">Close [X]</a></center>
            </div>
        </div>
        <?php
    }
    ?>