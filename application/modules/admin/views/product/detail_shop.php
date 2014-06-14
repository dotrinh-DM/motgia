<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/style.css" />
<?php
if ($info['logged_in'] == TRUE)
{
    foreach ($data as $value)        ;
    ?>

    <section class="bg_shadow">
        <div class="wrap clearfix">
            <div class="title floatLeft">
                <h6>Bạn đang xem gian hàng: <?php echo $value->company; ?></h6>
            </div>
        </div>
    </section>

    <div id="boxes">
        <div style="top: 199.5px; left: 551.5px; display: none; border: 1px solid;border-radius: 14px;" id="dialog" class="window">
            <div style="width: 45px;height: 45px;float: left;margin: -25px -15px;">
                <img src="<?php echo base_url() ?>public/icons/pin_icon.png" style="width: 41px;">
            </div> 
            <div style="float: left;margin-left: 20px;width: 310px;">
                <center>
                    <span class="headermess" style="float: left;width: 100%;padding: 0px 25px;font-size: 13pt;font-weight: bold;color: #467259;"></span>
                </center>
            </div>
            <div style="float: right;">
                <a href="#" class="close"><img src="<?php echo base_url() ?>public/icons/del.png" style="width: 35px;margin: -14px -12px 0px 0px;float: right;"></a>
            </div>
            <div class="clear" id="contentmess" style="width: 100%;height: 70%;padding: 5px;text-align: center;font-size: 13pt;">
            </div>
        </div>
        <!-- Mask to cover the whole screen -->

        <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
        </div>
    </div>

    <section id="content" class="wrap">
        <div class="form boxcart box-drop">
            <h4 style="color: #A8370B;"><b>Chi tiết gian hàng</b></h4>
            <table class="oder_table">
                <thead>
                <th>#</th>
                <th>Tên gian hàng</th>
                <th>Địa chỉ</th>
                <th>Tỉnh/Thành phố</th>
                <th>Điện thoại</th>
                <th>Website</th>
                <th>Ảnh</th>
                </thead>
                <tr>
                    <td><?php echo $value->shopID ?></td>
                    <td><?php echo $value->company ?></td>
                    <td><?php echo $value->address ?></td>
                    <td style="color: #A8370B;"><?php echo $value->city ?></td>
                    <td style="color: #A8370B;"><?php echo $value->phone ?></td>
                    <td style="color: #A8370B;"><?php echo $value->website ?></td>
                    <td><img src="<?php echo base_url().$value->image; ?>" style="width:50px;height: 50px"/></td>
                </tr>
            </table>            
        </div>
    </section>
    <?php
} else
    redirect('trang-chu');
?>