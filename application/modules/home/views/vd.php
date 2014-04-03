<?php
foreach ($data_detail as $value) {
    $images1 = json_decode($value->images);
    foreach ($images1 as $value22) {
        ?>
        <a  href='<?php echo base_url() . $images1[0]; ?>'>
            <img src="<?php echo base_url() . $images1[0]; ?>"/></a>
    <?php
    }
}?>