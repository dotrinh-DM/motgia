<aside id="sidebar">
    <?php foreach ($same_product as $giongnhau) { $imggiongnhau = json_decode($giongnhau->images); ?>


        <div class="box_item">
            <a href="<?php echo site_url("home/cproducts/showDetailProducts/$giongnhau->id/$giongnhau->categoriesID"); ?>" class="img_box">
                <img src="<?php echo base_url().$imggiongnhau[0]; ?>" alt="000"/>
            </a>
            <h6><a href="<?php echo site_url("home/cproducts/showDetailProducts/$giongnhau->id/$giongnhau->categoriesID"); ?>"><?php echo $giongnhau->name ?></a></h6>
            <span class="price"><?php echo $giongnhau->price; ?></span>
        </div>

    <?php } ?>
</aside><!--End #sidebar-->