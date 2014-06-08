<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/homecss/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery-ui.js"></script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            numberOfMonths: 3,
            showButtonPanel: true,
            dateFormat: "yy-mm-dd",
            timeFormat: "HH:mm"
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/homecss/table_category.css" />
<div id="leftBox">
    <div class="contentBox">
        <div class="contentBoxTop">
        </div>
        <div class="innerContent">
            <form action="<?php echo site_url('admin/report_controller/view'); ?>" method="post">
                <select name="type">
                    <option value="product">By product</option>
                    <option value="category">By category</option>
                </select>
                From: <input type="text" class="datepicker" name="fromdate" value="">
                - To: <input type="text" class="datepicker" name="todate" value="">

                <p class="stdformbutton">
                    <button class="btn btn-primary" type="submit" name="ook">Hiển thị kết quả</button>
                    <button type="reset" class="btn">Reset Form</button>
                </p>
            </form>
            <?php
            if (isset($product)) {
                ?>
                <table class="sTable">
                    <thead>
                    <tr>
                        <th><strong>Product Name</strong></th>
                        <th><strong>Sold</strong></th>
                        <th><strong>Total</strong></th>
                    </tr>
                    </thead>
                    <?php

                    foreach ($product as $info) {
                        ?>

                        <tr class="oddRow">
                            <td class="firstCol"><a href="#"><?php echo $info->name; ?></a></td>
                            <td class="secondCol"><a href="#"><?php echo $info->soldnumber; ?></a></td>
                            <td class="secondCol"><a href="#"><?php echo number_format($info->soldnumber * $info->price); ?>
                                    Vnd</a></td>

                        </tr>
                    <?php } ?>

                    <?php
                    if (isset($category)) {
                        foreach ($category as $info) {
                            ?>

                            <tr class="oddRow">
                                <td class="firstCol"><a href="#"><?php echo $info->category_name; ?></a></td>
                                <td class="secondCol"><a href="#"><?php echo $info->quan; ?></a></td>
                                <td class="secondCol"><a
                                        href="#"><?php echo number_format($info->total * $info->quan); ?> Vnd</a></td>

                            </tr>
                        <?php
                        }
                    } ?>
                </table>
            <?php } ?>
        </div>
        <!--end of #box-3-->
    </div>
    <hr/>
</div><!-- end of #leftBox -->