<script>
    $(document).ready(function() {
        function popupshow(param) {
            var id = '#dialog';
            //Get the screen height and width
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            //Set heigth and width to mask to fill up the whole screen
            $('#mask').css({'width': maskWidth, 'height': maskHeight});
            //transition effect
            $('#mask').fadeIn(1000);
            $('#mask').fadeTo("slow", 0.8);
            //Get the window height and width
            var winH = $(window).height();
            var winW = $(window).width();
            //Set the popup window to center
            $(id).css('top', winH / 2 - $(id).height() / 2);
            $(id).css('left', winW / 2 - $(id).width() / 2);
            //transition effect
            $(id).fadeIn(2000);
            //if close button is clicked
            $('.window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });
            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });
        }
//        $('.clockmess').append('10');
        $(function() {
            $('#cancel_order').live("click", "submit", function(e) {//Hiện cửa sổ ghi lý do hủy
                $('.headermess').empty();
                $('#contentmess').empty();
                $('.headermess').fadeIn(1000).html('Hủy đơn hàng');
                $('#contentmess').append('</br><form action="" method="post">\n\
                        <textarea id="note" name="note" placeholder="lý do hủy" required="" style="font-size: 11pt;margin-top: -10px;height: 80px;" class="validationValid"></textarea>\n\
                        <input type="submit" class="btn" value="ok" style="margin-top: -8px;width: 80px;padding: 10px;"/></form>');
                popupshow();
                return false;
            });
        });
    });
</script>

<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Chi tiết hóa đơn mã số: <?php echo $_GET['orderid'] ?></h6>
        </div>
    </div>
</section>

<div id="boxes">
    <div style="top: 199.5px; left: 551.5px; display: none; border: 1px solid;border-radius: 14px;" id="dialog" class="window">
        <div style="width: 45px;height: 45px;float: left;margin: -25px -15px;">
            <img src="http://localhost:7070/motgia/public/icons/pin_icon.png" style="width: 41px;">
        </div> 
        <div style="float: left;margin-left: 20px;width: 310px;">
            <center>
                <span class="headermess" style="float: left;width: 100%;padding: 0px 25px;font-size: 13pt;font-weight: bold;color: #467259;"></span>
            </center>
        </div>
        <div style="float: right;">
            <a href="#" class="close"><img src="http://localhost:7070/motgia/public/icons/del.png" style="width: 35px;margin: -14px -12px 0px 0px;float: right;"></a>
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
        <div style="margin-bottom: 30px">
            <?php
            if (isset($seller) && count($seller)) {
                if ($seller['status'] == 0)//don hang da bi huy
                    echo '
            <center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="disabled" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            ">Đơn hàng đã bị hủy</button>
            </center>
            <div style="margin: 10px 0px 10px 0px;
                 border: 1px solid #ABC3D8;
                 border-radius: 5px;
                 padding: 10px;">
                <p>Đơn hàng mang mã số <b>' . $_GET['orderid'] . '</b> đã bị hủy bởi <b>' . $seller['fullname'] . '</b> vào ngày ' . $seller['date_cr'] . '</p>
                <p><b>Lý do : </b></p>
            </div>';

                else if ($seller['status'] == 2)//don hang da xac nhan
                    echo '<span style="border: 1px solid #87EC19;border-radius: 5px 5px 5px 5px;padding: 15px;margin-bottom: 64px;">Đơn hàng đã được gian hàng xác nhận, yêu cầu xác nhận lại đơn hàng của bạn!</span>';
            }
            ?>


        </div>

        <h4 style="color: #A8370B;"><b>Chi tiết đơn hàng :</b></h4>
        <table class="oder_table">
            <thead>
            <th>#</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            </thead>
            <?php
            if (isset($detail) && count($detail)) {
                $i = 0;
                $tien = 0;
                foreach ($detail as $key => $value) {
                    $tien += $value->number * $value->price;
                    $i+=1;
                    echo '
                        <tr>
                            <td>' . $i . '</td>
                            <td>' . $value->proname . '</td>
                            <td>' . $value->number . '</td>
                            <td style="color: #A8370B;">' . number_format($value->price, 2, ', ', '.') . ' VNĐ</td>
                            <td style="font-style: italic;color: #A8370B;"><b>' . number_format($value->number * $value->price, 2, ', ', '.') . ' VNĐ</b></td>
                        </tr>
                         ';
                }
                echo '
                        <tr>
                            <td colspan="4" style="text-align:right"><b>Tổng Cộng : 
                            </td>
                            <td style="font-style: italic;color: #A8370B;"><b> ' . number_format($tien, 2, ', ', '.') . ' VNĐ</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right"><b>
                                <p>Hình thức thanh toán : </p></b>
                            </td>
                            <td>
                                <p><b>';
                echo ($seller['method'] == 0) ? 'Thanh toán tại nhà' : 'Thanh toán trực tuyến';
                echo'</b></p>
                            </td>
                        </tr>
                        ';
            }
            ?>
        </table>
        <div class="marginTop_30"></div>
        <table class="oder_table">
            <thead>
            <th colspan="2"><center>Thông tin đơn hàng</center></th>
            <th colspan="2"><center>Hình thức thanh toán</center></th>
            </thead>
            <?php
            if (isset($seller) && count($seller)) {
                echo '
                        <tr>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Mã đơn hàng : </p>
                                <p>Họ tên : </p>
                                <p>Email : </p>
                                <p>SĐT : </p>
                                <p>Địa chỉ : </p>
                                </b>
                            </td>
                            <td>    
                                <p><span style="color:red">' . $seller['orderID'] . '</span></p>
                                <p>' . $seller['fullname'] . '</p>
                                <p>' . $seller['selleremail'] . '</p>
                                <p>' . $seller['sellerphone'] . '</p>
                                <p>' . $seller['selleradd'] . '</p>
                            </td>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Thời gian đặt : </p>
                                <p>Hình thức thanh toán : </p>
                                </b>
                            </td>
                            <td>
                                <p>' . $seller['date_cr'] . '</p>
                                <p>';
                echo($seller['method'] == 0) ? 'Thanh toán khi nhận hàng' : 'Thanh toán trực tuyến';
                echo'</p>
                            </td>
                        </tr>
                        
        </table><div class="marginBottom_15"></div>      
                        ';
            }
            ?>
            <div class="marginTop_30"></div>
            <table class="oder_table">
                <thead>
                <th colspan="2"><center>Thông tin người mua</center></th>
                <th colspan="2"><center>Thông tin người nhận</center></th>
                </thead>
                <?php
                if (isset($seller) && count($seller)) {
                    echo '
                        <tr>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Họ tên : </p>
                                <p>Email : </p>
                                <p>SĐT : </p>
                                <p>Địa chỉ : </p>
                                </b>
                            </td>
                            <td>
                                <p>' . $profile['fullname'] . '</p>
                                <p>' . $profile['email'] . '</p>
                                <p>' . $profile['phone'] . '</p>
                                <p>' . $profile['address'] . '</p>
                            </td>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Họ tên : </p>
                                <p>Email : </p>
                                <p>SĐT : </p>
                                <p>Địa chỉ : </p>
                                </b>
                            </td>
                            <td>
                                <p>' . $profile['fullname'] . '</p>
                                <p>' . $profile['email'] . '</p>
                                <p>' . $profile['phone'] . '</p>
                                <p>' . $profile['address'] . '</p>
                            </td>
                        </tr>
                        
        </table><div class="marginBottom_15"></div>
        <p><b>Cảm ơn đã quý khách đã sử dụng dịch vụ trên onepricemarket.tk !</b></p>      
                        ';
                    if ($seller['status'] == 1)//Đơn hàng đang chờ xác nhận
                        echo '
                    <form method="post" action="">
                    <center><input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            " name="deny" value="Huỷ đơn hàng" id="cancel_order"/>
                    </center>
                    </form>
                    ';
                    if ($seller['status'] == 2 && $seller['method'] == 0)//Đơn hàng đã xác nhận
                        echo '
                    <form method="post" action="">
                    <center><input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #1182CE;
                            " name="deny" value="Tôi đồng ý và thanh toán"/>
                    </center>
                    <center><input type="submit" class="btn btn-primary btn-lg btn-block" id="cancel_order" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            " name="deny" value="Huỷ đơn hàng"/>
                    </center>
                    </form>
                    ';
                }
                ?>

                <div class="marginBottom_15"></div>
                </div>
                </section>
