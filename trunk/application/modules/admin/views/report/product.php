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
<style>
    /** Tables (classified as "sTable") **/
    table.sTable {
        width: 701px;
        margin: 0 0 0 -10px;
        border-collapse: collapse;
    }

    table.sTable td {
        border-top: 1px solid #dfdfdf;
        text-align: center;
        font-size: 0.9em;
        padding: 5px 0;
        margin: 0;
        color: #999;
    }

    table.sTable td:first-child {
        text-align: left;
        padding: 0 0 0 15px;
    }

    table.sTable tr.oddRow {
        background: url(images/bg_tableRow.gif) repeat-x 0px 1px;
    }

    td.firstCol a {
        color: #9aa685;
        font-weight: bold;
    }

    td.firstCol a:hover {
        text-decoration: none;
    }

    td.secondCol a {
        color: #ab8617;
        text-decoration: none;
        border-bottom: 1px solid #cbbb7c;
    }

    td.secondCol a:hover {
        border-bottom-color: #ab8617
    }

    td.editItem {
        width: 120px;
    }

    td.editItem ul li {
        float: left;
        margin-right: 13px;
        padding-left: 18px;
    }

    td.editItem ul li a {
        color: #666;
        text-decoration: none;
        display: block;
    }

    li.iconEdit {
        background: url(images/icon_edit.gif) no-repeat;
    }

    li.iconDel {
        background: url(images/icon_delete.gif) no-repeat 2px 3px;
    }

    a.deleteLink {
        color: #c04e1e;
        text-decoration: none;
    }

    a.deleteLink:hover {
        text-decoration: underline;
    }
</style>
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