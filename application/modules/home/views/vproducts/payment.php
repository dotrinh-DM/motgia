<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $(".formpay").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".formpay").submit(function(evt) {
            if ($(".formpay").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
        });
         ////////////Dong ho dem nguoc
        var sec = 10
        var timer = setInterval(function() {
            $('#hideMsg span').text(sec--);
            if (sec == -1) {
                $('#hideMsg').fadeOut('fast');
                clearInterval(timer);
            }
        }, 1000);
    });
</script>      
<script>
    $(document).ready(function() {
        var name = $('#fullname1').val();
        var phone = $('#phone1').val();
        var mail = $('#mail1').val();
        var add = $('#address1').val();
        var city = $('#province1').val();
        $('#checkbox1').prop('checked', true);
        $('#checkbox2').prop('checked', true);
        $('#fullname2').val(name);
        $('#phone2').val(phone);
        $('#mail2').val(mail);
        $('#address2').val(add);
        $(".province2 select").val(city);

        $('#checkbox1').live("change", function() {
            if (this.checked) {
                $('#fullname1').val(name);
                $('#phone1').val(phone);
                $('#address1').val(add);
                $('#mail1').val(mail);
                $(".province1 select").val(city);
            }
            else {
                $('#mail1').val("");
                $('#fullname1').val("");
                $('#phone1').val("");
                $('#address1').val("");
                $(".province1 select").val("");
            }
        });
        $('#checkbox2').live("change", function() {
            var name2 = $('#fullname1').val();
            var phone2 = $('#phone1').val();
            var mail2 = $('#mail1').val();
            var add2 = $('#address1').val();
            var city2 = $('#province1').val();
            if (this.checked) {
                $('#fullname2').val(name2);
                $('#phone2').val(phone2);
                $('#address2').val(add2);
                $('#mail2').val(mail2);
                $(".province2 select").val(city2);
//                $('#fullname1').live("keyup", function() {
//                var valu = $('#fullname1').val();
//                $('#fullname2').val(valu);
//            });
            }
            else {
                $('#mail2').val("");
                $('#fullname2').val("");
                $('#phone2').val("");
                $('#address2').val("");
                $(".province2 select").val("");
            }
        });

    });


</script>


<section id="content" class="wrap">
    <?php
    if ($info != FALSE || (isset($guest) && count($guest))) {
        ?>
        <div class="boxconfirm clearfix">
            <form action="" method="post" class="formpay">
                <div class="col"> 
                    <h4>
                        <label for="otherAddress">
                            Thông tin khách hàng
                        </label>
                    </h4>
                    <div class="type_checkbox">
                        <input type="checkbox" name="check" id="checkbox1" value="ok1"/>
                        <label for="checkbox1" style="color:#848282;">lấy thông tin đã <span style="color: #3498db;"><a href="#">Đăng Ký</a></span></label>
                        <p></p>
                    </div>
                    <div class="col-inside">
                        <div class="col-box">
                            <?php
                            if (isset($profile) && count($profile)) {
                                echo '
                    <div class="row1 clearfix userinfo">
                        <a id="avatar">
                            <img src="' . base_url() . 'public/icons/user_icon.png" alt="">
                        </a>
                        <p style="padding-top: 15px;">Chào <b>' . $info['fullname'] . '</b></p>
                    </div>
                        ';
                            }
                            ?>

                        </div>
                        <div id="_otherAddress" class="form col-box" style="display: block;">
                            <div>
                                <label for="fullname">Họ tên:</label>
                                <input type="text" required="" id="fullname1" name="fullname" value="<?php
                                echo (count($info) && isset($info)) ? $info['fullname'] : '';
                                echo (isset($guest) && count($guest)) ? $guest['fullname'] : '';
                                ?>">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập họ tên</span>
                            </div>
                            <div>
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" required="" id="phone1" name="phone" class="h5-phone" value="<?php
                                echo isset($profile) ? $profile['phone'] : '';
                                echo (isset($guest) && count($guest)) ? $guest['phone'] : '';
                                ?>">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập số điện thoại</span>
                            </div>
                            <div>
                                <label for="phone">Email:</label>
                                <input type="text" required="" id="mail1" class="h5-email" name="phone" value="<?php
                                echo isset($profile) ? $profile['email'] : '';
                                echo (isset($guest) && count($guest)) ? $guest['mail'] : '';
                                ?>">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập số điện thoại</span>
                            </div>
                            <label>Tỉnh  - Thành phố:</label>
                            <div class="select province1" style="width: 125px">
                                <select id="province1" required="" name="province">
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
                                        if ((isset($profile) && count($profile) && $arr[$i] == $profile['province']) || (isset($guest) && count($guest) && $arr[$i] == $guest['province']))
                                            echo '<option value="' . $arr[$i] . '" selected="selected">' . $arr[$i] . '</option>';
                                        else
                                            echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="address">Địa chỉ (số nhà tên đường):</label>
                                <textarea id="address1" required="" name="address" placeholder="Địa chỉ chi tiết (số nhà tên đường)"><?php
                                    echo (isset($profile) && count($profile)) ? $profile['address'] : '';
                                    echo (isset($guest) && count($guest)) ? $guest['address'] : '';
                                    ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>
                        <label for="otherAddress">
                            Thông tin người nhận
                        </label>
                    </h4>
                    <div class="type_checkbox">
                        <input type="checkbox" required="" name="check" id="checkbox2" value="ok2"/>
                        <label for="checkbox2" class="same" style="color:#848282;">Cùng người mua</label>
                        <p></p>
                    </div>
                    <div class="col-inside">
                        <div id="_otherAddress" class="form col-box" style="display: block;">
                            <div>
                                <label for="fullname2">Họ tên:</label>
                                <input type="text" required="" id="fullname2" name="fullname">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập họ tên người nhận</span>
                            </div>
                            <div>
                                <label for="phone2">Số điện thoại:</label>
                                <input type="text" required="" id="phone2" name="phone" class="h5-phone">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập số điện thoại người nhận</span>
                            </div>
                            <div>
                                <label for="mail2">Email:</label>
                                <input type="text" required="" id="mail2" name="mail2" class="h5-email">
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui lòng nhập số điện thoại người nhận</span>
                            </div>
                            <label>Tỉnh  - Thành phố:</label>
                            <div class="select province2" style="width: 115px">
                                <select id="province2" required="" name="province">
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
                                        echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="address2">Địa chỉ (số nhà tên đường):</label>
                                <textarea id="address2" required="" name="address" ></textarea>
                                <span class="tooltip" style="display: block;margin-top: 33px">Vui nhập số nhà và tên đường nơi bạn đang sống</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>
                        <label for="otherAddress">
                            Đơn hàng
                        </label>
                    </h4>
                    <?php
                    if (isset($_SESSION['pay']) && count($_SESSION['pay']) > 1) {
                        if ($_SESSION['pay']['method'] == 1)
                            echo '
                        <div>
                            <label class="same" style="color:#848282;">Thanh toán trực tuyến qua tài khoản bảo kim</label>
                            <p></p>
                        </div>
                        ';
                        else if ($_SESSION['pay']['method'] == 0)
                            echo '
                        <div>
                            <label class="same" style="color:#848282;">Thanh toán khi nhận hàng</label>
                            <p></p>
                        </div>
                        ';
                        ?>

                        <div class="col-inside" style="margin-top: -5px;">
                            <?php
                            echo '
                              <table class="checkout-cart">
                                <tbody>
                                ';
                            foreach ($_SESSION['pay'] as $uid => $value) {
                                if ($uid != 'method') {
                                    $tong = 0;
                                    foreach ($value as $proid => $value2) {
                                        if ($proid != 'shopname') {
                                            echo '
                                <tr>
                                    <td style="padding:5px">
                                        <img src="';
                                            $this->load->model('Mproducts');
                                            $image1 = $this->Mproducts->getImage($proid);
                                            $image = json_decode($image1['images']);
                                            echo base_url() . $image[0];
                                            echo '" alt="" height="90" width="60">
                                    </td>
                                    <td style="padding:5px">
                                        <b><p class="prname">' . $value2['productname'] . '</p></b>
                                        <p>Giá:  <span style="color:red">100. 000 VNĐ</span></p>
                                        <p>Số lượng: ' . $value2['soluong'] . '</p>
                                    </td>
                                </tr>
                                        ';
                                            $tong += 100000 * $value2['soluong'];
                                        }
                                    }
                                }
                            }
                            echo '
                    </tbody></table>
                    <div class="payment">
                        <h5 class="total" style="font-size: 10pt;font-weight: bold;"><span style="float: left;padding: 5px;">Tổng tiền: </span><span style="float: right;padding: 5px;">' . number_format($tong, 2, ',', '. ') . ' VNĐ</span></h5>
                        <textarea id="note" name="note" placeholder="Ghi chú đơn hàng" style="margin: 5px;width: 275px;"></textarea>
                        <input type="submit" class="btn" style="margin: 0px;width: 275px;" value="Xác nhận thanh toán" name="thanhtoan"/>
                    </div>
                            ';
                        } else {
                            echo '<div class="col-inside" style="margin-top: -5px;">
                                Không có sản phẩm nào để thanh toán
                                <div id="hideMsg">
                                Chuyển về giỏ hàng sau <span>10</span> giây
                                </div>
                        ';
                            $page = base_url() . 'cart';
                            header("Refresh: 11; url=$page");
                        }
                        ?>

                    </div><!-- End .box-drop-->
                    <div style="padding: 15px"><b>Lưu ý:</b><br/>Vui lòng cung cấp chính xác thông tin!<br/>Các thông tin trên sẽ được sử dụng để giao nhận đơn hàng.</div>
                </div>
            </form>
        </div>
    </section>
    <?php
} else {
    echo '<div style="margin: 100px 283px;
border: 1px solid;
border-radius: 5px;
padding: 20px;">
                                Bạn phải đăng nhập để sử dụng chức năng thanh toán trực tuyến!
                                Hoặc cung cấp đầy đủ thông tin tại giỏ hàng để thanh toán tại nhà
                                Vui lòng <a href="' . base_url() . 'dang-ky">Đăng ký</a> hoặc <a href="#">Đăng nhập</a>
                                </br></br>
                                <div id="hideMsg">
                                Chuyển về trang chủ sau <span>10</span> giây
                                </div>
                        ';
    $page = base_url();
    header("Refresh: 11; url=$page");
}
?>
<div class="clear"></div>