<?php ?>
<section id="content" class="wrap">
    <div class="boxconfirm clearfix">
        <div class="col">
            <h4 class="header">Thông tin khách hàng</h4>
            <div class="col-inside">
                <div class="col-box">
                    <div class="row1 clearfix userinfo">
                        <a id="avatar">
                            <img src="http://localhost/SmallPortal/public/uploads/photos/thumbs/post_06.jpg" alt="">
                        </a>
                        <p style="padding-top: 15px;">Chào <b><?php echo $info['fullname']?></b></p>
                    </div>
                </div>

                <h4>
                    <input name="otherAddress" id="otherAddress" value="1" type="checkbox" checked="checked" disabled="disabled">
                    <label for="otherAddress">
                        <input type="hidden" name="otherAddress" value="1">
                        Thông tin khách hàng
                    </label></h4>
                <div id="_otherAddress" class="form col-box" style="display: block;">
                    <div>
                        <label for="fullname">Họ tên</label>
                        <input type="text" id="fullname" name="fullname" value="<?php echo $info['fullname']?>">
                        <span class="tooltip" style="display: block;">Vui lòng nhập họ tên người nhận</span>
                    </div>
                    <div>
                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $profile['phone']?>">
                        <span class="tooltip">Vui lòng nhập số điện thoại người nhận</span>
                    </div>
                    <label>Tỉnh  - Thành phố</label>

                    <div class="select">

                        <select id="province" name="province">
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
                            <span class="tooltip">Vui lòng chọn Tỉnh - Thành phố nơi bạn đang sống</span>
                    </div>
                    <label>Quận - Huyện</label>
                    <div class="select">

                        <select id="district" name="district">
                            <option value="0">Chọn Quận -  Huyện</option>
                        </select>
                        <span class="tooltip">Vui lòng chọn Quận - Huyện nơi bạn đang sống</span>
                    </div>
                    <div>
                        <label for="address">Địa chỉ (số nhà tên đường)</label>
                        <textarea id="address" name="address" ><?php echo $profile['address']?></textarea>
                        <span class="tooltip">Vui nhập số nhà và tên đường nơi bạn đang sống</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h4 class="header">Phương thức thanh toán</h4>
            <div class="col-inside">
                <div class="radio_item radio_item_active">
                    <label class="radio_label"><input checked="checked" name="method[]" value="Thanh toán khi nhận hàng" type="radio">Thanh toán khi nhận hàng</label>
                    <div class="radio_item_content" style="display: block;">
                        Quý khách sẽ thanh toán trực tiếp với nhân viên của chúng tôi bằng tiền mặt tại địa chỉ giao hàng                            </div>
                </div>
                <div class="radio_item">
                    <label class="radio_label"><input name="method[]" value="Thanh toán chuyển khoản" type="radio">Thanh toán chuyển khoản</label>
                    <div class="radio_item_content" style="display: none;">
                        <p>
                            <img src="http://kellyyangshop.com/public/uploads/KELLY/admin/photos/Bank/bank_05.jpg" alt="Ngân hàng Vietcombank">
                            <br>
                        </p><p>Chủ khoản: Nguyễn Văn A</p>

                        <p>Số tài khoản: 91723027309273</p>
                        <p></p>
                        <p>
                            <img src="http://kellyyangshop.com/public/uploads/KELLY/admin/photos/Bank/bank_06.jpg" alt="Ngân hàng Techcombank">
                            <br>
                        </p><p>Chủ khoản: Nguyễn Văn A<br>
                            Số tài khoản: 91723027309273</p>
                        <p></p>
                        <p>
                            <img src="http://kellyyangshop.com/public/uploads/KELLY/admin/photos/Bank/bank_10.jpg" alt="Ngân hàng Eximbank">
                            <br>
                        </p><p>Chủ khoản: Nguyễn Văn A<br>
                            Số tài khoản: 91723027309273</p>
                        <p></p>
                    </div>
                </div>
                <div class="radio_item">
                    <label class="radio_label">
                        <input name="method[]" value="Thanh toán qua bảo kim" type="radio"/>
                        Thanh toán qua bảo kim</label>
                    <div class="radio_item_content form">
                        <p>
                            <label for="nganluong_email">Email</label>
                            <input type="email" id="nganluong_email" name="nganluong_email">
                            <span class="tooltip">Vui lòng nhập tài khoản bảo kim</span>
                        </p>
                        <p>
                            <label for="nganluong_password">Mật khẩu</label>
                            <input type="password" id="nganluong_password" name="nganluong_password">
                            <span class="tooltip">Vui lòng mật khẩu ko bỏ trống</span>
                        </p>
                        <p>
                            <a target="_blank" href="?portal=nganluong&amp;page=forgot_login_password">Quên mật khẩu?</a>
                        </p>
                        <p>
                            Bạn chưa có tài khoản Ngân lượng? <a target="_blank" href="?portal=nganluong&amp;page=user_register"><b>Đăng ký miễn phí tại đây</b></a>
                        </p>
                    </div>
                </div>
            </div><!-- End .box-drop-->
        </div>
        <div class="col">
            <h4 class="header">Đơn hàng</h4>
            <div class="col-inside">
<?php
if (isset($_SESSION['pay']) && count($_SESSION['pay'])) {
    echo '
                              <table class="checkout-cart">
                                <tbody>
                                ';
    foreach ($_SESSION['pay'] as $uid => $value) {
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
?>
                </tbody></table>
                <div class="payment">

                    <h5 class="total"><span style="float: left;padding: 5px;">Tổng tiền: </span><span style="float: right;padding: 5px;"><?php echo number_format($tong, 2, ',', '. '); ?> VNĐ</span></h5>
                    <button class="btn">Tiến hành thanh toán</button>
                </div>
            </div><!-- End .box-drop-->
        </div>
    </div>

    <div class="clear"></div>