<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $(".formcart").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".formcart").submit(function(evt) {
            if ($(".formcart").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
        });


        $('#loginform3').submit(function(event) { //Trigger on form submit
            $('.logintitle').html('Đăng nhập');
            var postForm = {//Fetch form data
                'email2': $('input[name=inputemail3]').val(), //Store name fields value
                'pass2': $('input[name=inputpass3]').val()
            };
            $.ajax({//Process the form using $.ajax()
                type: 'POST', //Method type
                url: '<?php echo base_url(); ?>home/cusers/login', //gọi đến controller xử lý
                data: postForm, //truyền biến dưới dạng $_POST['ten bien']
                dataType: 'json',
                success: function(data) { // load lại trang sau 3 giay
                    if (!data.success) { //nếu controller trả về kết quả lỗi
                        if (data.errors.name) //Lấy thông tin báo lỗi
                            $('.logintitle').fadeIn(1000).html('Sai tên truy nhập hoặc mật khẩu!'); //chèn mã lỗi vào thẻ có class = throw_error
                    } else
                        location.reload(true);//đăng nhập thành công thì reload lại trang
                },
            });
            event.preventDefault(); //Prevent the default subm
        });

        $('#continue').live("click", function()
        {
            var fullname = $(".fullname").val();
            var phone = $(".h5-phone").val();
            var mail = $(".h5-email").val();
            var province = $("#province").val();
            var address = $("#address").val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('home/cusers/addGuest'); ?>",
                data: {"fullname": fullname, "phone": phone, "mail": mail, "province": province, "address": address},
                success: function(html) {
                    $("#cke").empty();
                    $("#cke").append(html);
                }
            });
        });
        $('.number').live("click", function()
        {
            var number = $(this).val();
//        var number2 = $.parseNumber(number, {format:"#.###,000", locale:"us"});
            var id = $(this).attr("id");
            $("#changenumber" + id).empty();
            $("#changenumber" + id).append('<input class="ok" type="button" id="' + id + '" value="ok"style="padding: 0px;width: 30px;height: 28px;"/>\n\
                    <input class="cancel" type="button" id="' + id + '" value="hủy" style="padding: 0px;width: 30px;height: 28px;"/>');


            $('.cancel').click(function() {
                var id = $(this).attr("id");//proid
                $("#changenumber" + id).empty();
            });

            $('.ok').live("click", function() {
                var proid = $(this).attr("id");
                var uid = $('.hidden_user' + proid).val();

//            var number2 = $.formatNumber(number*100000, {format: "#,###.00", locale: "us"});
//            $("#salaryUS").val(number);
//            var tong =+ parseInt($('.totalprice'+uid).val());
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cproducts/updatecart'); ?>",
                    data: {"userid": uid, "soluong": number, "proid": proid},
                    success: function(html) {
                        $("#changenumber" + proid).empty();
                        $('.totalprice' + proid).empty();
                        $('.totalprice' + proid).append(number * 100000);
                    }
                });
            });
        });
        $('.payonline').live("click", function(e) {//Nếu chưa đăng nhập thì hiện cửa sổ popup để đăng nhập
            var login = '<?php echo $info['logged_in'] == TRUE ? "TRUE" : "FALSE"; ?>';
            if (login == "TRUE") {
                $('.formcart').attr('action', '<?php echo base_url() ?>thanh-toan-truc-tuyen');
            } else {
                $(this).showPopup({
                    top: 120, //khoảng cách popup cách so với phía trên
                    closeButton: ".close_popup", //khai báo nút close cho popup
                    scroll: false, //cho phép scroll khi mở popup, mặc định là không cho phép
                    onClose: function() {
                        //sự kiện cho phép gọi sau khi đóng popup, cho phép chúng ta gọi 1 số sự kiện khi đóng popup, bạn có thể để null ở đây
                    }
                });
                $('.logintitle').html('Đăng nhập');
                return false;
            }
        });
    });
</script>
<style type="text/css" >
    @import url('<?php echo base_url(); ?>public/adminstyle/css/animate.min.css')
    @import url('<?php echo base_url(); ?>public/adminstyle/css/animate.delay.css')

</style>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/popup.js"></script>
<div id="popup_content" class="popup">
    <a class="close_popup" href="javascript:void(0)"><img src="<?php echo base_url() ?>public/icons/del.png" style="width: 35px;margin: -37px 0px 0px 3px;"/></a>
    <div class="loginwrap zindex100 animate2 bounceInDown" style="margin-top: -20px;margin-right: -1px;">
        <h1 class="logintitle" style="font-weight: bold;"><span class="iconfa-lock"></span> Đăng nhập <span class="subtitle" style="margin: 5px 0px -15px 10px;">Xin chào! Bạn phải đăng nhập để sử dụng chức năng thanh toán!</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform3" action="" method="post">
                <div  class="position">
                    <p class="animate5 bounceIn">
                        <input type="text" id="username" name="inputemail3" required="" placeholder="Username" />
                        <span class="tooltip">Không được để trống</span>
                    </p>
                </div>
                <div  class="position">
                    <p class="animate5 bounceIn">
                        <input type="password" id="password" name="inputpass3" required="" placeholder="Password" />
                        <span class="tooltip">Không được để trống</span>
                    </p>
                </div>
                </p>
                <p class="animate6 bounceIn"><input type="submit" class="btn btn-default btn-block" name="login" value="Login"/></p>
                <p class="animate7 fadeIn"><a href="" style="color:#C8D6E2"><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div>

<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Giỏ hàng </h6>
            <span>Giỏ hàng</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Xóa giỏ hàng" href="<?php echo site_url("home/cproducts/delCart"); ?>"  onclick="return confirm('Bạn có muốn xóa toàn bộ giỏ hàng?');"><img src="<?php echo base_url(); ?>public/icons/del.gif" style="float: right;margin-top: -4px;" height="25px" width="25px"/></a>
                <span itemprop="title" class="floatLeft">Xóa giỏ hàng </span>
            </div>
        </div>
    </div>
</section>

<section id="content" class="wrap">
    <form action="" method="post" id="cart" class="formcart">
        <?php
        if ($info == FALSE && isset($_SESSION['cart']) && count($_SESSION['cart'])) {
            echo '
        <div style="border: 1px solid;border-color: #374BB4;padding: 15px; margin-top: 20px;border-radius: 0px 50px 0px 50px;">
            <img src="' . base_url() . 'public/icons/place_icon.png" width="13px" height="20px"/>
            <label style="color: #8494A2;">&nbsp;Địa chỉ người nhận: <a href="#">Đăng nhập</a> để lấy thông tin</label>
            <div class="form col-box marginTop_30" style="display: block; margin: 19px">
                <span style="color: #545D64;font-size: 16px;font-weight: bold;">HÃY ĐIỀN ĐẦY ĐỦ THÔNG TIN MUA HÀNG:</span>
                <table >
                    <tr>
                        <td>
                            <div>
                                <label for="fullname">Họ & tên:</label>
                                <input class="fullname" required="" style="margin-bottom: 0px;" type="text" id="fullname" name="fullname" value="';
            echo (isset($guest) && count($guest)) ? $guest['fullname'] : '';
            echo '">
                                <span class="tooltip" style="display: block;width: 180px;margin-top: -20px;">Vui lòng nhập họ tên người nhận</span>
                            </div>

                        </td>
                        <td style="padding-top: 15px;">
                            <div class="select" style="width: 150px;height: 37px;margin-bottom: 16px; margin-left: 20px">

                                <select id="province" name="province" style="min-width: 150px" required="">
                                    <option value="">--Tỉnh - Thành phố--</option>
                                    ';
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
                if (isset($guest) && $arr[$i] == $guest['province'])
                    echo '<option value="' . $arr[$i] . '" selected="selected">' . $arr[$i] . '</option>';
                else
                    echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
            }
            echo '
                                </select>
                                <span class="tooltip" style="display: block;width: 180px;margin-top: -20px;">Vui lòng chọn Tỉnh - Thành phố nơi bạn đang sống</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="marginBottom_0">
                                <label for="phone">Số điện thoại:</label>
                                <input required="" class="h5-phone" style="margin-bottom: 0px;" type="text" id="phone" name="phone" value="';
            echo ( isset($guest)) ? $guest['phone'] : '';
            echo '">
                                <span class="tooltip" style="display: block;width: 180px;margin-top: -20px;">Vui lòng nhập số điện thoại người nhận</span>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div>
                                <textarea required="" id="address" name="address" placeholder="Địa chỉ chi tiết (số nhà tên đường)" style="height: 94px;margin-left: 20px;">';
            echo ( isset($guest)) ? $guest['address'] : '';
            echo '</textarea>
                                <span class="tooltip" style="display: block;width: 180px;margin-top: -20px;">Vui nhập số nhà và tên đường nơi bạn đang sống</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="marginBottom_0">
                                <label for="phone">E-mail:</label>
                                <input required="" class="h5-email" style="margin-bottom: 0px;" type="text" id="phone" name="mail" value="';
            echo ( isset($guest)) ? $guest['mail'] : '';
            echo'">
                                <span class="tooltip" style="display: block;width: 180px;margin-top: -20px;">Vui lòng nhập email người nhận</span>
                            </div>
                        </td>

                    </tr>
                </table>
                <center><input id="continue" required="" type="button" value="xác nhận & tiếp tục" class="btn btn-primary next" style="margin-top: 0px"/>
                    <p><div id="cke"></div></center>

            </div>
        </div>';
        }
        ?>
        <div class="form boxcart box-drop">

            <?php
            $tong = 0;
            if (isset($_SESSION['cart']) && $_SESSION['cart']) {

                foreach ($_SESSION['cart'] as $userid => $value) {

                    $tong = 0;
                    echo '
                        
                          <div class="seller">
                            <h3 style="text-align: left;font-size: 18px;">Gian hàng: <a href="#">' . $value['shopname'] . '</a></h3>
                            <a title="Xóa sản phẩm của gian hàng" href="' . site_url("home/cproducts/delCart/$userid") . '" style="float: right;margin: -55px 18px;" onclick="return confirm(' . "'" . 'Bạn có muốn xóa toàn bộ sản phẩm này từ gian hàng này?' . "'" . ');">Xóa</a>
                          </div>
                          <table>
                            <thead>
                                <tr style="height: 50px">
                                    <th style="text-align: center">#</th>
                                    <th style="width: auto; padding:10px">Hình</th>
                                    <th style="text-align: left;padding:10px">Tên Sản phẩm</th>
                                    <th style="width:auto; text-align: left; padding:10px; max-width:180px;">Số lượng</th>
                                    <th style="text-align: right;padding:10px">Đơn giá</th>
                                    <th style="text-align: right;padding:10px">Thành tiền</th>
                                    <th style="width: auto"></th>
                                </tr>
                            </thead>
                            <input type = "hidden" name = "payinfo[' . $userid . ']" value = "' . $userid . '"/>
                                <input type="hidden" id="uid" value="' . $userid . '">
                        ';
                    $stt = 0;
                    foreach ($value as $productid => $value2) {

                        if ($productid != 'shopname') {//key2= productid
                            $stt++;
                            echo '  
                                <tbody>
                                    <tr id="cart_iwz9zi66" rel="">
                                        <td style="text-align: center">' . $stt . '</td>
                                        <td><img src="';
                            $this->load->model('Mproducts');
                            $image1 = $this->Mproducts->getImage($productid);
                            $image = json_decode($image1['images']);
                            echo base_url() . $image[0];
                            echo '" alt="" height="60" width="60"></td>
                                        <td style="text-align: left;padding:10px">
                                            <a href="#">' . $value2['productname'] . '</a>
                                            <br>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="hidden" class="hidden_user' . $productid . '" value="' . $userid . '"/>
                                                <input class="number" id="' . $productid . '" type="number" min="1" max="99" style="float:left;height: 30px;width: 60px;margin: 10px;padding: 5px;" name="soluong[' . $userid . '][' . $productid . ']" value="' . $value2['soluong'] . '"/>
                                                <div id="changenumber' . $productid . '" style="float: left;margin-top: -10px;">
                                                   </div>
                                            </div>
                                        </td>
                                        <td style="text-align: right;padding:10px">' . number_format(100000, 0, ',', '. ') . ' VNĐ</td>
                                        <td style="text-align: right;padding:10px"><span class="totalprice' . $productid . '" >' . number_format(100000 * $value2['soluong'], 0, ',', '. ') . '</span> VNĐ
                                        <input type="hidden" class="hidden_price' . $userid . ' hidden_price' . $productid . '" value="' . 100000 * $value2['soluong'] . '"/>
                                        </td>
                                        <td style="text-align: center">
                                            <a title="Xóa khỏi giỏ hàng" href="' . site_url("home/cproducts/delCart/$userid/$productid") . '" onclick="return confirm(' . "'" . 'Bạn có muốn xóa sản phẩm này từ giỏ hàng?' . "'" . ');">Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>';
                            $tong += 100000 * $value2['soluong'];
                        }
                    }
                    echo '
                            <tfoot>
                                <tr><td colspan="7">                                        
                                    <p id="productTotal" class="product-total"
                                    style="text-align: right;font-size: 16px;">Tổng tiền: <span class="total' . $userid . '">' . number_format($tong, 3, ' ,', '. ') . '</span> VNĐ</p>
                                        <input type="hidden" id="hidden_total" value="' . $tong . '"/>
                                </td></tr>
                            </tfoot>
                        </table>
                        
                                <div class="col">
                                    <div class="payment">
                                        
                                        <div class="pay">
                                            <input type="submit" href="#popup_content" name="payonline[' . $userid . ']" value="Thanh toán trực tuyến" class="payonline"/>
                                            <input type="submit" name="payhome[' . $userid . ']" value="Thanh toán khi nhận hàng" class="payhome" />
                                        </div>
                                    </div>
                                </div><!-- End .boxcart-info--> 
                        
                        ';
                }
            }
            else
                echo 'Không có sản phẩm nào trong giỏ hàng của bạn!';
            ?>
        </div>
    </form>
</section>