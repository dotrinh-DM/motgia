
<!---hàm validate--->
<script src="<?php echo base_url(); ?>template/js/change.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
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


        $.h5Validate.addPatterns({
            day_vn: /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/
        });
        $(".form").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".form_info").submit(function(evt) {
            if ($(".form_info").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
        });
        $(".form_pass").submit(function(evt) {

            var x = document.forms["form_pass"]["new_pass"].value;
            var y = document.forms["form_pass"]["re_new_pass"].value;
            if (x !== y) {
                alert('Yêu cầu nhập lại mật khẩu!');
                document.getElementById("renew").focus();
                evt.preventDefault();
            }
            if ($(".form_pass").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
        });
        $('#tab-container').easytabs();

        $('.old_pass').on("blur", function() {//kiem tra mat khau
            $(this).val(function(i, val) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cusers/checkpass'); ?>",
                    data: "oldpass=" + val,
                    cache: false,
                    success: function(html) {
//                    alert('sdfsdf');
                        $('.errorpass').empty();
                        $('.errorpass').append(html);
                    }
                });
                return val();
            });
        });

        $('.showmessage').live("click", function()
        {
            var ID = $(this).attr("id");
            if (ID)
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cusers/showMessage'); ?>",
                    data: "messID=" + ID,
                    success: function(html) {
                        $('.act').removeClass('active');
                        $('.unread1' + ID).removeClass('name_user').addClass('name_user2');
                        $('.unread2' + ID).removeClass('title_post2').addClass('title_post');
                        $("#message_content").empty();
                        $("#message_content").append(html);
                        $('.active' + ID).addClass('active');

                    }
                });
            }
            return false;
        });

        $('.edit_status_product').live("click", function()
        {
            var ID = $(this).attr("id");
            var UID = '<?php echo $info['userID'] ?>';
            var STATUS = $("#status_product" + ID).val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('home/cusers/changeStatusProduct'); ?>",
                data: {"proid": ID, "userid": UID, "status": STATUS},
                success: function(html) {
                    $("#status_product" + ID).empty();
                    $("#status_product" + ID).append(html);
                }
            });
            return false;
        });
        $('.cancel_order').live("click", "submit", function(e) {//Hiện cửa sổ ghi lý do hủy$('.headermess').empty();
            var oid = $(this).attr('id');
            $('#contentmess').empty();
            $('.headermess').fadeIn(1000).html('Hủy đơn hàng');
            $('#contentmess').append('</br><form action="" method="post">\n\
                        <textarea id="note" name="note" placeholder="lý do hủy" required="" style="font-size: 11pt;margin-top: -10px;height: 80px;" class="validationValid"></textarea>\n\
                        <input type="submit" id="' + oid + '" class="btn order_ok" value="ok" style="margin-top: -8px;width: 80px;padding: 10px;"/></form>');
            popupshow();
            return false;
        });

        $('.order_ok').live("click", function(e) {
            var orderID = $(this).attr('id');
            var statusID = $('.statusid' + orderID).val();
            var note = $("#note").val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('home/cusers/cancel_order') ?>",
                data: {"oid": orderID, "statusID": statusID, "note": note},
                success: function(html) {
                    location.reload(true);
                }
            });
        });
    });
</script>
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
    <div class="boxconfirm clearfix">
        <div id="tab-container" class='tab-container marginBottom_15'>
            <ul class='etabs'>
                <li class='tab active' ><a href="#profile">Thông tin người dùng</a></li>
                <li class='tab'><a href="#messages"><?php echo (isset($num_message) && $num_message > 0) ? '<span>' . $num_message . '</span>' : ''; ?>Tin nhắn</a></li>
                <?php
                if (!isset($shopper) || $shopper == FALSE)
                    echo '<li class="tab"><a href="#upgrade">Mở gian hàng</a></li>';
                ?>
                <li class='tab'><a href="#history">Đơn hàng đã đặt</a></li>
                <li class='tab'><a href="#monney">Nạp tiền</a></li>
            </ul>
            <div class='panel-container'>

                <!--start profile-->
                <div id="profile">
                    <div class="change">
                        <h6 class="title_detail_item">profile <span class="onclick">[ Sửa ]</span> </h6>

                        <table class="detail_profile"> 

                            <tr>
                                <td>Ảnh đại diện</td>
                                <td><img src="<?php echo site_url('public/icons/hidden_user.png') ?>" width="80px"/></td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Họ và tên</td>
                                <td><?php echo $profile['firstname'] . ' ' . $profile['lastname']; ?></td> 
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td><?php echo ($profile['gender'] == 0) ? 'Nam' : 'Nữ'; ?></td> 
                            </tr>
                            <tr>
                                <td>Ngày sinh</td>
                                <td><?php echo $profile['birthofday']; ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?php echo $profile['address']; ?></td>
                            </tr>
                            <tr>
                                <td>TelePhone</td>
                                <td><?php echo $profile['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Tỉnh/Thành phố</td>
                                <td><?php echo $profile['province']; ?>,  Viet Nam</td>
                            </tr>

                        </table><!--End detail_profile -->
                        <div class="form change_open">
                            <form class="form change_open" id="form_info" method="post" name="form_info" action="">
                                <!--<input type="number" name="quantity" min="1" max="5">-->
                                <div class="position">
                                    <label>Họ<span>*</span></label>
                                    <input type="text" required="" name="first_name" value="<?php echo $profile['firstname']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Tên<span>*</span></label>
                                    <input type="text" required="" name="last_name" value="<?php echo $profile['lastname']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <div class="clearfix">
                                    <label>Ngày sinh<span>*</span></label>
                                    <input type="date" required=""  name="birthday" placeholder="dd/mm/yyyy" title="dd/mm/yyyy"
                                           style="
                                           height: 34px;
                                           font: -webkit-small-control;
                                           background: #e5e6e6;
                                           width: 290px;
                                           color: #272727;
                                           border: 0 none;
                                           border-radius: 3px;
                                           "/></p><span class="tooltip">Định dạng: ngày/tháng/năm</span>
                                    <span class="tooltip" style="right: 300px;">Định dạng: ngày/tháng/năm</span>
                                </div>
                                <div class="clearfix"></div>
                                <div class=" clearfix" style="
                                     margin: 20px 0px 20px 0px;">
                                    <label>Giới tính<span>*</span></label>
                                    <input type="radio" name="gender" id="1" <?php if ($profile['gender'] == 0) echo 'checked'; ?> value="0"/>Nam
                                    <input type="radio" name="gender" id="2" <?php if ($profile['gender'] == 1) echo 'checked'; ?> value="1"
                                           style="margin: 10px 0px 0px 10px;"/>Nữ
                                </div>
                                <div>
                                    <label>Điện thoại<span>*</span></label>
                                    <input type="text" class="h5-phone" name="phone" required="" value="<?php echo $profile['phone']; ?>"/>

                                    <span class="tooltip" style="right: 300px;">Phải điền số</span>
                                </div>
                                <div>
                                    <label>Địa chỉ<span>*</span></label>
                                    <input type="text" required="" name="address" value="<?php echo $profile['address']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Tỉnh/Thành phố<span>*</span></label>
                                    <div class="select" style="width:auto">
                                        <select required="" name="province" >
                                            <option value="">--Chọn--</option>
                                            <?php
                                            $arr = array(
                                                0 => 'Hà Nội', 1 => 'TP HCM', 2 => 'Cần Thơ', 3 => 'Đà Nẵng', 4 => 'Hải Phòng',
                                                5 => 'An Giang', 6 => 'Bà Rịa - Vũng Tàu', 7 => 'Bắc Giang', 8 => 'Bắc Kạn',
                                                9 => 'Bạc Liêu', 10 => 'Bắc Ninh', 11 => 'Bến Tre', 12 => 'Bình Định',
                                                13 => 'Bình Dương', 14 => 'Bình Phước', 15 => 'Bình Thuận', 16 => 'Cà Mau',
                                                17 => 'Cao Bằng', 18 => 'Đắk Lắk', 19 => 'Đắk Nông', 20 => 'Điện Biên',
                                                21 => 'Đồng Nai', 22 => 'Đồng Tháp', 23 => 'Gia Lai', 24 => 'Hà Giang',
                                                25 => 'Hà Nam', 26 => 'Hà Tĩnh', 27 => 'Hải Dương', 28 => 'Hậu Giang',
                                                29 => 'Hòa Bình', 30 => 'Hưng Yên', 31 => 'Khánh Hòa', 32 => 'Kiên Giang',
                                                33 => 'Kon Tum', 34 => 'Lai Châu', 35 => 'Lâm Đồng', 36 => 'Lạng Sơn',
                                                37 => 'Lào Cai', 38 => 'Long An', 39 => 'Nam Định', 40 => 'Nghệ An',
                                                41 => 'Ninh Bình', 42 => 'Ninh Thuận', 43 => 'Phú Thọ', 44 => 'Quảng Bình',
                                                45 => 'Quảng Nam', 46 => 'Quảng Ngãi', 47 => 'Quảng Ninh', 48 => 'Quảng Trị',
                                                49 => 'Sóc Trăng', 50 => 'Sơn La', 51 => 'Tây Ninh', 52 => 'Thái Bình',
                                                53 => 'Thái Nguyên', 54 => 'Thanh Hóa', 55 => 'Thừa Thiên Huế', 56 => 'Tiền Giang',
                                                57 => 'Trà Vinh', 58 => 'Tuyên Quang', 59 => 'Vĩnh Long', 60 => 'Vĩnh Phúc',
                                                61 => 'Yên Bái', 62 => 'Phú Yên'
                                            );
                                            for ($i = 0; $i < 62; $i++) {
                                                if ($arr[$i] == $profile['province'])
                                                    echo '<option value="' . $arr[$i] . '" selected="selected">' . $arr[$i] . '</option>';
                                                else
                                                    echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label></label>
                                    <input type="submit" id="save_info" name="save_info" value="SAVE"/>
                                </div>
                            </form>
                            <button class="btn" style="margin: -57px 0px 0px 283px;"  class="onclick">CANCEL</button>
                        </div>
                    </div>

                    <div class="change">
                        <h6 class="title_detail_item">Mật khẩu <span class="onclick">[ Sửa ]</span> </h6>
                        <b><span style="float: left;margin: -25px 130px;color: #5CB13B;">
                                <?php
                                if ($this->session->flashdata('success_change_pass'))
                                    echo ($this->session->flashdata('success_change_pass'));
                                ?></span></b>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Email</td>
                                <td><?php echo $info['email']; ?></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>......</td>
                            </tr>
                        </table><!--End detail_profile -->
                        <div class="form_pass change_open">
                            <form class="form change_open" action="" method="post" name="form_pass" id="form_pass">
                                <div>
                                    <label>Mật khẩu cũ<span>*</span></label>
                                    <input type="password" required="" name="old_pass" class="old_pass"/>
                                    <span class="tooltip" style="right: 300px;">không được để trống</span>
                                    <div class="errorpass" style="color:red;float: left;margin: -43px 460px;width: 110px;"></div>
                                </div>
                                <div>
                                    <label>Mật khẩu mới<span>*</span></label>
                                    <input type="password" required="" name="new_pass"/>
                                    <span class="tooltip" style="right: 300px;">không được để trống</span>
                                </div>
                                <div>
                                    <label>Nhập lại mật khẩu mới<span>*</span></label>
                                    <input type="password" required="" name="re_new_pass" id="renew"/>
                                    <span class="tooltip" style="right: 300px;">không được để trống</span>
                                </div>

                                <div>
                                    <label></label>
                                    <input type="submit" id="save_pass" name="save_pass" value="SAVE"/>
                                </div>
                            </form>
                            <button class="btn" style="margin: -57px 0px 0px 283px;"  class="onclick">CANCEL</button>
                        </div>
                    </div><!--end change-->


                </div> <!--End #profile-->
            </div>
            <!--start Messages-->
            <div id="messages">
                <h6 class="title_detail_item">Newsletters</h6>
                <div class="content_3 clearfix">
                    <div class="col_2 detail_content_3">
                        <form id="formSearch_mss" class="clearfix">
                            <input type="text" class="txt-search" placeholder="search">
                            <input type="button" class="btnsearch" >
                        </form>
                        <ul class="scroll border_left">
                            <?php
                            if (count($message_info))
                                foreach ($message_info as $key => $value) {
                                    echo '
                                            <a title="' . $value->title . '" class="showmessage" id="' . $value->messageID . '" class="active">
                                            <li class="active' . $value->messageID . ' act">
                                                <div class="listitem clearfix">
                                                    <figure class="img_post">
                                                        <img src="' . base_url() . 'public/icons/';
                                    if ($value->LVsender == 0)
                                        echo 'user_icon.png';
                                    if ($value->LVsender == 1)
                                        echo 'seller_icon.png';
                                    if ($value->LVsender == 2)
                                        echo 'system_icon.png';
                                    echo '" alt="img-hot"/>
                                                    </figure>
                                                <div class="listitem_ct">';

                                    echo ($value->status == 0) ? '<b><span class="unread1' . $value->messageID . ' name_user">' . $value->ho_nguoi_gui . $value->ten_nguoi_gui . '</span>
                                                    <span class="unread2' . $value->messageID . ' title_post2" title="' . $value->title . '">' . $value->title . '</span></b>' :
                                            '<span class="name_user2">' . $value->ho_nguoi_gui . $value->ten_nguoi_gui . '</span>
                                                    <span class="title_post">' . $value->title . '</span>';
                                    echo '
                                                </div>
                                                    <time>' . $value->date . '</time>
                                                </div>
                                            </li></a>';
                                }
                            else
                                echo 'khong co tin nhan hien thi';
                            ?>
                        </ul>
                    </div>
                    <div class="col_2 detail_content_3" style="padding: 28px 0px 0px 0px;">
                        <div id="message_content">
                            <!--noi dung tin nhan-->
                        </div>
                    </div>
                </div>
            </div><!--End #messages-->

            <?php
            if (!isset($shopper) || $shopper == FALSE) {
                ?>
                <!--đăng ký gian hàng-->
                <div id="upgrade">
                    <h6 class="title_detail_item">Mở gian hàng miễn phí</h6>
                    <div class="change marginTop_30">
                        <form enctype="multipart/form-data"  class="form" id="form_reg_shop" method="post" action="" style="margin-top: 40px">
                            <b><span style="float: left;margin: -30px 163px;color: #5CB13B;">
                                    <?php
                                    if ($this->session->flashdata('success_reg_shop'))
                                        echo ($this->session->flashdata('success_reg_shop'));
                                    ?></span></b>
                            <div class="position">
                                <label>Công ty<span>*</span></label>
                                <input class="nameshop" type="text" required="" name="name_shop" value="<?php // echo $profile['firstname'];                ?>"/>
                                <span class="tooltip" style="right: 300px;">Không được để trống</span>
                            </div>
                            <div>

                                <div>
                                    <label>Địa chỉ<span>*</span></label>
                                    <textarea class="addshop" type="text" required="" name="address_shop"><?php // echo $profile['address'];                ?></textarea>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <label>Tỉnh/Thành phố<span>*</span></label>
                                <div class="select cityshop" style="width:auto">
                                    <select required="" name="province_shop">
                                        <option value="">--Chọn--</option>
                                        <?php
                                        $arr = array(
                                            0 => 'Hà Nội', 1 => 'TP HCM', 2 => 'Cần Thơ', 3 => 'Đà Nẵng', 4 => 'Hải Phòng',
                                            5 => 'An Giang', 6 => 'Bà Rịa - Vũng Tàu', 7 => 'Bắc Giang', 8 => 'Bắc Kạn',
                                            9 => 'Bạc Liêu', 10 => 'Bắc Ninh', 11 => 'Bến Tre', 12 => 'Bình Định',
                                            13 => 'Bình Dương', 14 => 'Bình Phước', 15 => 'Bình Thuận', 16 => 'Cà Mau',
                                            17 => 'Cao Bằng', 18 => 'Đắk Lắk', 19 => 'Đắk Nông', 20 => 'Điện Biên',
                                            21 => 'Đồng Nai', 22 => 'Đồng Tháp', 23 => 'Gia Lai', 24 => 'Hà Giang',
                                            25 => 'Hà Nam', 26 => 'Hà Tĩnh', 27 => 'Hải Dương', 28 => 'Hậu Giang',
                                            29 => 'Hòa Bình', 30 => 'Hưng Yên', 31 => 'Khánh Hòa', 32 => 'Kiên Giang',
                                            33 => 'Kon Tum', 34 => 'Lai Châu', 35 => 'Lâm Đồng', 36 => 'Lạng Sơn',
                                            37 => 'Lào Cai', 38 => 'Long An', 39 => 'Nam Định', 40 => 'Nghệ An',
                                            41 => 'Ninh Bình', 42 => 'Ninh Thuận', 43 => 'Phú Thọ', 44 => 'Quảng Bình',
                                            45 => 'Quảng Nam', 46 => 'Quảng Ngãi', 47 => 'Quảng Ninh', 48 => 'Quảng Trị',
                                            49 => 'Sóc Trăng', 50 => 'Sơn La', 51 => 'Tây Ninh', 52 => 'Thái Bình',
                                            53 => 'Thái Nguyên', 54 => 'Thanh Hóa', 55 => 'Thừa Thiên Huế', 56 => 'Tiền Giang',
                                            57 => 'Trà Vinh', 58 => 'Tuyên Quang', 59 => 'Vĩnh Long', 60 => 'Vĩnh Phúc',
                                            61 => 'Yên Bái', 62 => 'Phú Yên'
                                        );
                                        for ($i = 0; $i < 62; $i++) {
//                                                if ($arr[$i] == $profile['province'])
//                                                    echo '<option value="' . $arr[$i] . '" selected="selected">' . $arr[$i] . '</option>';
//                                                else
                                            echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div style="margin-top: 15px">
                                <label>Website</label>
                                <input class="webshop" type="text" name="website_shop" value="<?php // echo $profile['address'];                ?>"/>
                            </div>
                            <div style="margin-top: 15px">
                                <label>Ảnh đại diện</label>
                                <input style="margin-left: 200px;" class="webshop" type="file" name="anh" title="Ảnh"/>
                            </div>
                            <br/>
                            <div>
                                <label>Điện thoại<span>*</span></label>
                                <input type="text" class="h5-phone phoneshop" name="phone_shop" required="" value="<?php // echo $profile['phone'];                ?>"/>
                                <span class="tooltip" style="right: 300px;">Phải điền số</span>

                            </div>
                            <div class="position">
                                <label>Mã xác nhận<span>*</span></label>
                                <input type="text" name="captcha" required="" placeholder="Không phân biệt chữ viết Hoa"/>
                                <span class="tooltip" style="right: 300px;">Không được để trống</span>
                            </div>
                            <div>
                                <label></label>
                                <div style="float: left"><span id="capt"><?php echo $captcha; ?></span></div>
                                <div><button class="recaptcha" style="border: none; background-color: white"><img src="<?php echo base_url(); ?>public/icons/refresh-icon.png" height="40px" width="40px"/></button></div>
                            </div>
                            <div style="padding-left: 165px;">
                                <br>
                                Các tư vấn viên sẽ liên lạc ngay sau khi bạn đăng ký (Trong giờ hành chính)<br>
                                Gian hàng đảm bảo được những lợi ích gì?<br>
                                - Được đảm bảo thanh toán mua bán trên Internet.<br>
                                - Được tư vấn bán hàng online hiệu quả hơn.<br>
                                - Được quảng cáo trên nhiều vị trí hấp dẫn của Motgia.tk<br>
                                - Được đăng tin miễn phí...<br>
                            </div>
                            <div class="clearfix"></div>
                            <div class="type_checkbox" style="margin: 15px 165px;">
                                <input type="checkbox" name="check" id="checkbox" value="ok"/>
                                <label for="checkbox" style="color:#848282;">Tôi đã đọc và đồng ý <span style="color: #3498db;">Quy đinh</span> của website</label>
                            </div>
                            <div style="margin-top: -15px">
                                <label></label>
                                <input type="submit" id="ok_shop" name="ok_shop" value="Chấp nhận" style="background-color: #4B84B6;"/>
                                <input type="submit" id="re_shop" name="" value="Làm lại" style="background-color: #4B84B6;"/>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $("#form_reg_shop").submit(function(evt) {
                            if ($("#form_reg_shop").h5Validate("allValid") === false) {
                                evt.preventDefault();
                            }
                        });
                        $('#re_shop').live("click", function() {
                            $('.nameshop').val('');
                            $('.addshop').val('');
                            $('.cityshop select').val('');
                            $('.webshop').val('');
                            $('.phoneshop').val('');
                            return false;
                        });
                        $('.recaptcha').live("click", function()
                        {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo site_url('home/cusers/re_captcha'); ?>",
                                //                        cache: false,
                                success: function(kq) {
                                    $("#capt").html(kq);
                                }
                            });
                            return false;
                        });
                    });
                </script>
            <?php } ?>


            <!--start History-->
            <?php
            echo '
            <div id="history">
                <h6 class="title_detail_item">history</h6>
                <table class="oder_table">
                    ';

            if (isset($order_buy) && count($order_buy)) {
                echo '
                        <tr>
                            <th>#</th>
                            <th>Người bán</th>
                            <th>Thông tin đơn hàng</th>
                            <th>Giá trị đơn hàng</th>
                            <th><center>Trạng thái</center></th>
                            <th><center>Thao tác</center></th>
                        </tr>';
                $i = $paging_order_buy['start'];
                foreach ($order_buy as $key => $ord) {
                    ?>
                    <tr>
                        <td>
                            <?php
                            for ($i; $i < $paging_order_buy['start'] + $paging_order_buy['display']; $i++) {
                                echo $i + 1;
                                $i = $i + 1;
                                break;
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            echo '<p style="color:#7769AD"><b>' . $ord->company . '</b></p>';
                            echo '<p>Địa chỉ: ' . $ord->shopadd . ' ' . $ord->shopcity . '</p>';
                            echo '<p>SĐT: ' . $ord->shopphone . ' ... ';
                            ?>
                            <a href="#">> <b>Chi tiết</b></a></p>
                        </td>
                        <td>
                            <p>Mã đơn hàng: <?php echo $ord->orderID; ?></p>
                            <p>Ngày mua: 
                                <?php
                                $ts = mktime(0, 0, 0, $ord->date, $ord->month, $ord->year);
                                echo date("l", $ts) . ', ' . $ord->date_cr;
                                ?>
                            </p>
                            <p>Hình thức thanh toán: <?php echo ($ord->method==0)? 'Tại nhà':'Trực tuyến' ?></p>
                            <a href="<?php echo site_url('home/cusers/historydetail') . '?orderid=' . $ord->orderID; ?>">> <b>Chi tiết</b></a>
                        </td>
                        <td>
                            <?php
                            $this->load->model('Musers');
                            echo '<p style="font-style: italic;color: #A8370B;"><b>' . number_format($this->Musers->getValueOrder($ord->orderID), 2, ', ', '.') . ' VNĐ</b></p>';
                            ?>
                        </td>
                        <td><span class="bg_gray" style="float: left">
                                <?php
                                if ($ord->status == 0)
                                    echo 'Đã hủy';
                                else if ($ord->status == 1)
                                    echo 'Đang chờ xác nhận';
                                else if ($ord->status == 2)
                                    echo 'Đã xác nhận';
                                ?>
                            </span>
                        </td>
                        <td></td>
                    </tr>
                    <?php
                }
            }
            else
                echo 'Rất tiếc! Không có nội dung hiển thị';

            echo '</table>
                    <section class="pagination">
                        <div>';

            function showpaging3($curent3, $i3) {
                if ($curent3 != $i3)
                    echo'<a href="' . base_url() . 'profile?hspage=' . $i3 . '#history">' . $i3 . '</a>';
                else
                    echo'<span class="active">' . $i3 . '</span>';
            }

            if ($paging_order_buy['num_page'] > 1 && isset($ord) && count($ord)) {//neu can hien thi so trang
                $first = 1;
                $total = $paging_order_buy['num_page'];
                $prev = $paging_order_buy['page'] - 1;
                $next = $paging_order_buy['page'] + 1;
                $curent = ($paging_order_buy['start'] / $paging_order_buy['display']) + 1;
                if ($curent != 1) {// neu la trang dau tien thi khong co nut prev
                    echo '<a href="' . base_url() . 'profile?hspage=' . $first . '#history">first</a>';
                    echo '<a href="' . base_url() . 'profile?hspage=' . $prev . '#history">prev</a>';
                    if ($curent >= 6 && $total > 9) {
                        echo '<span style="background=white; ">.....</span>';
                    }
                }
                //hien thi so trang
                for ($i = 1; $i <= $paging_order_buy['num_page']; $i++) {

                    if ($total > 9) {//neu tong so trang lon hon 9
                        if ($curent <= 5) {
                            showpaging3($curent, $i);
                            if ($i == 9)
                                break;
                        }
                        elseif ($curent >= 6 && $curent <= ($total - 5)) {
                            if ($i >= ($curent - 4) && $i <= $curent + 4) {
                                showpaging3($curent, $i);
                                if ($i == $curent + 4)
                                    break;
                            }
                        }
                        elseif ($curent >= ($total - 4)) {
                            if ($i >= ($total - 8))
                                showpaging3($curent, $i);
                        }
                    }
                    else {
                        showpaging3($curent, $i);
                    }
                }
                if ($curent != $total) {// neu la trang cuoi cung thi khong co nut next
                    if ($curent <= ($total - 5) && $total > 9)
                        echo '<span style="background=white; ">.....</span>';
                    echo '<a href="' . base_url() . 'profile?hspage=' . $next . '#history">next</a>';
                    echo '<a href="' . base_url() . 'profile?hspage=' . $total . '#history">last</a>';
                }
            }

            echo '</div>
                    </section><!-- #End pagination-->
                    </div><!----End #history-->
                ';
            ?>
            <div id="monney">
                <span>Soạn tin nhắn theo cú pháp <b>DV</b> <span><</span>dấu cách<span>></span> <b>MOTGIA</b> <span><</span>dấu cách<span>></span> <b><?php echo $info['userID'] ?></b>
                    Gửi <b>8085</b> (15.000đ/tin nhắn)
                </span><br><br>
                <span style="font-weight: bold;font-size: 10pt;color: #0DE928;">Lịch sử nạp tiền</span>
                <table class="oder_table">
                    <thead>
                    <th>No.</th>
                    <th>Ngày nạp</th>
                    <th>Cú pháp thực hiện</th>
                    <th>Số điện thoại nạp</th>
                    <th>Số tiền nạp</th>
                    </thead>
                    <?php
                    $i = 0;
                    $tong = 0;
                    if (count($money)) {
                        foreach ($money as $key => $value) {
                            $i++;
                            $tong += $value->money;
                            echo '
                                            <tr>
                                                <td>' . $i . '</td>
                                                <td>' . $value->date_cr . '</td>
                                                <td>' . $value->syntax . '</td>
                                                <td>' . $value->phone . '</td>
                                                <td>' . number_format($value->money, 2, ', ', '.') . '</td>
                                            </tr>
                                            ';
                        }
                    }
                    ?>
                    <tfoot>
                        <tr>
                            <td colspan="4" style="float: right"><span>Tổng số tiền đã nạp : </span></td>
                            <td><?php echo number_format($tong, 2, ', ', '.') ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!--End #tabs-->
    </div><!-- End Primary -->
