
<!---hàm validate--->
<script src="<?php echo base_url(); ?>template/js/change.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
    var ale = '<?php if ($this->session->flashdata('giahan_alert'))
            echo $this->session->flashdata('giahan_alert');?>';    
    if(ale != '')
        alert('<?php if ($this->session->flashdata('giahan_alert'))
            echo $this->session->flashdata('giahan_alert');?>');
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
        $('#tab-container').easytabs();
        $('#tab-container-pro').easytabs();
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
            $('#contentmess').append('</br><form action="<?php echo site_url('home/cusers/cancel_order') ?>" method="post">\n\
                        <input type="hidden" name="buyerID" value="' + $('.buyerid' + oid).val() + '"/>\n\
                        <input type="hidden" name="statusID" value="' + $('.statusid' + oid).val() + '"/>\n\
                        <input type="hidden" name="orderID" value="' + oid + '"/>\n\
                        <textarea id="note" name="note" placeholder="lý do hủy" required="" style="font-size: 11pt;margin-top: -10px;height: 80px;" class="validationValid"></textarea>\n\
                        <input type="submit" class="btn order_ok" value="ok" style="margin-top: -8px;width: 80px;padding: 10px;"/></form>');
            popupshow();
            return false;
        });
        $('.gia_han').live("click", "submit", function(e) {//Hiện cửa sổ ghi lý do hủy$('.headermess').empty();
            var proid = $(this).attr('id');
            $('#contentmess').empty();
            $('.headermess').fadeIn(1000).html('Gia hạn sản phẩm');
            $('#contentmess').append('</br><form action="<?php echo site_url('home/cshop/confirmPay') ?>" method="post" style="margin-top: -23px;font-family: serif;">\n\
                        <center><table>\n\
                            <input type="hidden" name="proid" value="' + proid + '"/>\n\
                            <tr>\n\
                                <td style="float:right">Chọn số ngày :&nbsp;</td>\n\
                                <td><div class="num_day">\n\
                                <select name="day" class="selectday" style="border: 1px solid;font-size: 15px;height: 26px;padding: 0px;">\n\
                                <option selected="" value="1">30 ngày</option>\n\
                                <option value="2">100 ngày</option>\n\
                                <option value="3">1 năm</option>\n\
                                </select></div>\n\
                                </td>\n\
                            </tr>\n\
                            <tr>\n\
                                <td style="float:right">Số dư tài khoản :&nbsp;</td>\n\
                                <td style="color:red"><span class="num_coin"><?php echo number_format($coin, 0, ', ', '.') ?></span> đ</td>\n\
                            </tr>\n\
                            <tr>\n\
                                <td  style="float:right">Số tiền phải trả :&nbsp;</td>\n\
                                <td style="color:red"><span class="num_pay">10.000</span> đ</td>\n\
                            </tr>\n\
                        </table></center>\n\
                        <div><span class="pay_erorr" style="color: red;font-size: 15px;"><span></div>\n\
                        <input type="submit" class="btn pay_ok" value="Chấp nhận" style="margin-top: 5px;width: 80px;padding: 10px;"/></form>');
            popupshow();
            var pay = $('.num_pay').html();
            var coin = '<?php echo $coin / 1000 ?>';
            if (parseInt(pay) > coin)
                $('.pay_erorr').append("Tài khoản của bạn không đủ để thực hiện giao dịch");

            return false;
        });
        $('.pay_ok').live("click", "submit", function(e) {
            var pay = $('.num_pay').html();
            var coin = '<?php echo $coin / 1000 ?>';
            if (parseInt(pay) > coin)
                alert('Bạn không đủ tiền để thực hiện giao dịch');
            else
                exit();
            return false;
        });
        $('.selectday').live("change", "submit", function(e) {
            var coin = '<?php echo $coin / 1000 ?>';
            $('.num_pay').empty();
            var value = $(this).val();
            if (value == 1)
                $('.num_pay').html('10.000');
            if (value == 2)
                $('.num_pay').html('30.000');
            if (value == 3)
                $('.num_pay').html('80.000');
            var pay = $('.num_pay').html();
            if (parseInt(pay) > coin)
                $('.pay_erorr').append("Tài khoản của bạn không đủ để thực hiện giao dịch");
            else
                $('.pay_erorr').empty();
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
                <li class='tab active' ><a href="#shopinfo">Thông tin gian hàng</a></li>
                <li class="tab"><a href="#products">Quản lý sản phẩm</a></li>
                <li class="tab"><a href="#bill"
<?php echo (isset($num_order) && $num_order > 0) ? 'tile="có ' . $num_order . ' đơn hàng chưa xử lý"><span>' . $num_order . '</span> ' : '>'; ?>
                                   Đơn hàng đã nhận</a></li>
                <li class='tab'><a href="#monney">Nạp tiền</a></li>
            </ul>
            <div class='panel-container'>

                <!--start shopinfo-->
                <div id="shopinfo">
                    <div class="change">
                        <h6 class="title_detail_item">profile <span class="onclick">[ Sửa ]</span> </h6>

                        <table class="detail_profile"> 
                            <tr>
                                <td>Ảnh đại diện</td>
                                <td><img src="<?php echo site_url('public/icons/shop_icon.png') ?>" width="80px"/></td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Tên gian hàng:</td>
                                <td><?php echo $profile['company'] ?></td> 
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?php echo $profile['address']; ?></td>
                            </tr>
                            <tr>
                                <td>Tỉnh/Thành phố</td>
                                <td><?php echo $profile['city']; ?>,  Viet Nam</td>
                            </tr>
                            <tr>
                                <td>Điện thoại:</td>
                                <td><?php echo $profile['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Website:</td>
                                <td><?php echo $profile['website']; ?></td>
                            </tr>

                        </table><!--End detail_profile -->
                        <div class="form change_open">
                            <form class="form change_open" id="form_info" method="post" name="form_info" action="">
                                <!--<input type="number" name="quantity" min="1" max="5">-->
                                <div class="position">
                                    <label>Tên gian hàng<span>*</span></label>
                                    <input type="text" required="" name="company" value="<?php echo $profile['company']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <label>Điện thoại<span>*</span></label>
                                    <input type="text" class="h5-phone" name="phone" required="" value="<?php echo $profile['phone']; ?>"/>

                                    <span class="tooltip" style="right: 300px;">Phải điền số</span>
                                </div>
                                <div>
                                    <label>website<span>*</span></label>
                                    <input type="text" class="h5-url" name="website" required="" value="<?php echo $profile['website']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Điền đúng định dạng website</span>
                                </div>
                                <div>
                                    <label>Địa chỉ<span>*</span></label>
                                    <input type="text" required="" name="address" value="<?php echo $profile['address']; ?>"/>
                                    <span class="tooltip" style="right: 300px;">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Tỉnh/Thành phố<span>*</span></label>
                                    <div class="select" style="width:auto">
                                        <select required="" name="city" >
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
                                                if ($arr[$i] == $profile['city'])
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
                                    <input type="hidden" value="<?php echo $profile['shopID'] ?>" name="shopid"/>
                                    <input type="submit" id="save_info" name="save_info" value="SAVE"/>
                                </div>
                            </form>
                            <button class="btn" style="margin: -57px 0px 0px 283px;"  class="onclick">CANCEL</button>
                        </div>
                    </div>
                </div> <!--End #shopinfo-->

            </div>
            <!--start products-->
            <div id="products">
                <ul class='proinfo'>
                    <li class="<?php if (!isset($_GET['allpro'])) echo 'active-pro'; else if ($_GET['allpro'] && $_GET['allpro'] == '1') echo 'active-pro'; ?>"><a href="?allpro=1#products">Tất cả sản phẩm</a></li>
                    <li class="<?php if (isset($_GET['allpro']) && $_GET['allpro'] && $_GET['allpro'] == 'hot') echo 'active-pro' ?>" ><a href="?allpro=hot#products">Sản phẩm bán chạy</a></li>
                    <li class="<?php if (isset($_GET['allpro']) && $_GET['allpro'] && $_GET['allpro'] == '4') echo 'active-pro' ?>" ><a href="?allpro=4#products">Sản phẩm quá hạn</a></li>
                    <li class="<?php if (isset($_GET['allpro']) && $_GET['allpro'] && $_GET['allpro'] == '3') echo 'active-pro' ?>"><a  href="?allpro=3#products">Sản phẩm chờ duyệt</a></li>
                    <li><a href="<?php echo site_url('up-product') ?>">Đăng sản phẩm</a></li>
                </ul>
                <div id="allproduct">
                    <table class="oder_table">
                        <?php
                        if (isset($product) && count($product)) {
                            echo '
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Ngày đăng</th>
                            <th>Tên sản phẩm</th>
                            <th>Ngày hết hạn</th>
                            <th>Đã bán</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>';
                            $i = $paging_product['start'];
                            foreach ($product as $value => $pro) {
                                $img = json_decode($pro->images);
                                ?>
                                <tr>
                                    <td><?php
                                        for ($i; $i < $paging_product['start'] + $paging_product['display']; $i++) {
                                            echo $i + 1;
                                            $i = $i + 1;
                                            break;
                                        }
                                        ?></td>
                                    <td><a href="#"><img src="<?php echo base_url() . $img[0]; ?>" alt="<?php echo $pro->name; ?>" height="50" width="50"/></a></td>
                                    <td><?php echo $pro->date_up; ?></td>
                                    <td><a href="#"><?php echo $pro->name; ?></a></td>
                                    <td><?php echo $pro->date_expiration; ?></td>
                                    <td><?php echo $pro->soldnumber; ?></td>
                                    <td style="width:161px">
                                        <input <?php if ($pro->status == 3 || $pro->status == 4) echo 'disabled="disabled"'; ?> type="submit" class="edit_status_product" id="<?php echo $pro->productsID ?>" name="change_status" value="Edit" style="width: 30px;height: 32px;padding: 0px;float: right;margin-top: 0px;border-radius: 0px 5px 5px 0px;"/>
                                        <input type="hidden" value="<?php echo $pro->productsID ?>" name="proID"/>
                                        <select <?php if ($pro->status == 3 || $pro->status == 4) echo 'disabled="disabled"'; ?> class="form-control floatLeft" id="status_product<?php echo $pro->productsID ?>" name="status_pro" style="width: 120px;">
                                            <?php
                                            if ($pro->status == 1)
                                                echo'
                                            <option value="1">Đang bán</option>
                                            <option value="2">Hết hàng</option>
                                            <option value="0">Ngừng bán</option>';
                                            elseif ($pro->status == 0)
                                                echo'
                                            <option value="0">Ngừng bán</option>
                                            <option value="1">Tiếp tục bán</option>';
                                            elseif ($pro->status == 2)
                                                echo'
                                            <option value="2">Hết hàng</option>
                                            <option value="1">Tiếp tục bán</option>';
                                            elseif ($pro->status == 3)
                                                echo'<option>Chờ duyệt</option>';
                                            elseif ($pro->status == 4)
                                                echo'<option value="2">Hết hạn</option>';
                                            ?>
                                        </select>
                                    </td>
                                    <td class="update">
                                        <ul>
                                            <li><a href="#" class="gia_han" id="<?php echo $pro->productsID ?>">Gia hạn</a></li>
                                            <li><a href="#">Sửa</a></li>
                                        </ul>

                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        else
                            echo '<div class="clear"></div><br>Không có nội dung hiển thị';
                        ?>

                    </table>
                    <section class="pagination">
                        <div>
                            <?php
                            if (isset($_GET['allpro']))
                                $prok = $_GET['allpro'];
                            else
                                $prok = 1;

                            function showpaging($curent1, $i1) {
                                if (isset($_GET['allpro']))
                                    $prok = $_GET['allpro'];
                                else
                                    $prok = 1;
                                if ($curent1 != $i1)
                                    echo'<a href="' . base_url() . 'home/cshop?sppage=' . $i1 . '&allpro=' . $prok . '#products">' . $i1 . '</a>';
                                else
                                    echo'<span class="active">' . $i1 . '</span>';
                            }

                            if ($paging_product['num_page'] > 1 && isset($product) && count($product)) {//neu can hien thi so trang
                                $first = 1;
                                $total = $paging_product['num_page'];
                                $prev = $paging_product['page'] - 1;
                                $next = $paging_product['page'] + 1;
                                $curent = ($paging_product['start'] / $paging_product['display']) + 1;
                                if ($curent != 1) {// neu la trang dau tien thi khong co nut prev
                                    echo '<a href="' . base_url() . 'home/cshop?sppage=' . $first . '&allpro=' . $prok . '#products">first</a>';
                                    echo '<a href="' . base_url() . 'home/cshop?sppage=' . $prev . '&allpro=' . $prok . '#products">prev</a>';
                                    if ($curent >= 6 && $total > 9) {
                                        echo '<span style="background=white; ">.....</span>';
                                    }
                                }
                                //hien thi so trang
                                for ($i = 1; $i <= $paging_product['num_page']; $i++) {

                                    if ($total > 9) {//neu tong so trang lon hon 9
                                        if ($curent <= 5) {
                                            showpaging($curent, $i);
                                            if ($i == 9)
                                                break;
                                        }
                                        elseif ($curent >= 6 && $curent <= ($total - 5)) {
                                            if ($i >= ($curent - 4) && $i <= $curent + 4) {
                                                showpaging($curent, $i);
                                                if ($i == $curent + 4)
                                                    break;
                                            }
                                        }
                                        elseif ($curent >= ($total - 4)) {
                                            if ($i >= ($total - 8))
                                                showpaging($curent, $i);
                                        }
                                    }
                                    else {
                                        showpaging($curent, $i);
                                    }
                                }
                                if ($curent != $total) {// neu la trang cuoi cung thi khong co nut next
                                    if ($curent <= ($total - 5) && $total > 9)
                                        echo '<span style="background=white; ">.....</span>';
                                    echo '<a href="' . base_url() . 'home/cshop?sppage=' . $next . '&allpro=' . $prok . '#products">next</a>';
                                    echo '<a href="' . base_url() . 'home/cshop?sppage=' . $total . '&allpro=' . $prok . '#products">last</a>';
                                }
                            }
                            ?>
                        </div>
                    </section><!-- #End pagination-->
                </div>
            </div><!--End #products-->


            <!--start Bill-->
            <div id="bill">
                <ul class='proinfo'>
                    <li class="<?php if (!isset($_GET['allorder'])) echo 'active-pro'; else if ($_GET['allorder'] && $_GET['allorder'] == 4) echo 'active-pro'; ?>"><a href="?allorder=4#bill">Đơn hàng đã nhận</a></li>
                    <li class="<?php if (isset($_GET['allorder']) && $_GET['allorder'] && $_GET['allorder'] == 1) echo 'active-pro' ?>"><a href="?allorder=1#bill">Đơn hàng mới nhận</a></li>
                    <li class="<?php if (isset($_GET['allorder']) && $_GET['allorder'] && $_GET['allorder'] == 'ko') echo 'active-pro' ?>"><a href="?allorder=ko#bill">Đơn hàng bị hủy</a></li>
                    <li class="<?php if (isset($_GET['allorder']) && $_GET['allorder'] && $_GET['allorder'] == 2) echo 'active-pro' ?>"><a href="?allorder=2#bill">Đơn hàng xác nhận</a></li>
                </ul>
                <table class="oder_table">
                    <?php
                    if (isset($order) && count($order)) {
                        echo '
                        <tr>
                        <th>#</th>
                        <th>Người mua</th>
                        <th>Thông tin đơn hàng</th>
                        <th>Giá trị đơn hàng</th>
                        <th><center>Trạng thái</center></th>
                        <th><center>Thao tác</center></th>
                    </tr>';
                        $i = $paging_order['start'];
                        foreach ($order as $key => $ord) {
                            ?>
                            <tr>
                                <td><?php
                                    for ($i; $i < $paging_order['start'] + $paging_order['display']; $i++) {
                                        echo $i + 1;
                                        $i = $i + 1;
                                        break;
                                    }
                                    ?>
                                </td>

                                <td><?php
                                    if (substr($ord->buyerID, 0, 3) == 'UID') {//đối với khách vãng lai
                                        $this->load->model('Musers');
                                        $userbuy = $this->Musers->getOrder_UserBuy($ord->orderID, $ord->buyerID);
                                        echo '<p style="color:#7769AD"><b>' . $userbuy['fullname'] . '</b> (thành viên)</p>';
                                        echo '<p>Năm sinh: ' . $userbuy['buyeryear'] . '</p>';
                                        echo '<p>Địa chỉ: ' . $userbuy['buyeradd'] . '</p>';
                                        echo '<p>SĐT: ' . $userbuy['buyerphone'] . ' ... ';
                                    } else if (substr($ord->buyerID, 0, 5) == 'GUEST') {//đối với khach hang vang lai
                                        $this->load->model('Musers');
                                        $userbuy = $this->Musers->getOrder_GuestBuy($ord->orderID, $ord->buyerID);
                                        echo '<p style="color:#7769AD"><b>' . $userbuy['fullname'] . '</b> (khách vãng lai)</p>';
                                        echo '<p>Email: ' . $userbuy['buyeremail'] . '</p>';
                                        echo '<p>Địa chỉ: ' . $userbuy['buyeradd'] . '</p>';
                                        echo '<p>SĐT: ' . $userbuy['buyerphone'] . ' ... ';
                                    }
                                    ?>
                                    <a href="#">> <b>Chi tiết</b></a></p>
                                </td>
                                <td>
                                    <p>Mã đơn hàng: <?php echo $ord->orderID; ?></p>
                                    <p>Ngày mua: <?php
                                        $ts = mktime(0, 0, 0, $ord->date, $ord->month, $ord->year);
                                        echo date("l", $ts) . ', ' . $ord->date_cr;
                                        ?></p>
                                    <p>Hình thức thanh toán: <?php echo ($ord->method == 1) ? 'online' : 'tại nhà' ?></p>
                                    <a href="<?php echo site_url('home/cusers/orderdetail') . '?orderid=' . $ord->orderID . '&buyer=' . $ord->buyerID; ?>">> <b>Chi tiết</b></a>
                                </td>
                                <td><?php
                                    $this->load->model('Musers');
                                    echo '<p style="font-style: italic;color: #A8370B;"><b>' . number_format($this->Musers->getValueOrder($ord->orderID), 2, ', ', '.') . ' VNĐ</b></p>';
                                    ?></td>
                                <td><span class="bg_gray" style="float: left">
                                        <?php
                                        if ($ord->status == 0)
                                            echo 'Đã hủy';
                                        else if ($ord->status == 1)
                                            echo 'Đang chờ xác nhận';
                                        else if ($ord->status == 2)
                                            echo 'Đã xác nhận';
                                        else if ($ord->status == 3)
                                            echo 'Đã thanh toán';
                                        ?></span></td>
                                <td>
                                    <?php
                                    if ($ord->status == 1)
                                        echo '<form action="" method="post">
                                <input type="hidden" name="buyerid" class="buyerid' . $ord->orderID . '" value="' . $ord->buyerID . '"/>
                                <input type="hidden" name="statusid" class="statusid' . $ord->orderID . '" value="' . $ord->statusID . '"/>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 75px; float:left;
                            font-size: 9pt;
                            padding: 5px;
                            margin-top: 0px;
                            border-radius: 3px;
                            background-color: #CEB711; 
                            " value="Xác nhận" name="confirm_order" onclick="return confirm(' . "'" . 'Bạn muốn xác nhận đơn hàng này và gửi tin nhắn hệ thống đến tài khoản khách hàng?' . "'" . ');"/>
                            <input type="submit" id="' . $ord->orderID . '" class="btn btn-primary btn-lg btn-block cancel_order" style="
                            width: 50px; float:right;
                            font-size: 9pt;
                            padding: 5px;
                            margin-top: 0px;
                            border-radius: 3px;
                            background-color: #CEB711; 
                            " value="Hủy" name="deny_order");"/></form>';
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                        echo '<div class="clear"></div><br>Rất tiếc! Không có nội dung hiển thị';
                    ?>
                </table>
                <section class="pagination">
                    <div>
                        <?php
                        if (isset($_GET['allorder']))
                            $ordok = $_GET['allorder'];
                        else
                            $ordok = 4;

                        function showpagingshop2($curent2, $i2) {
                            if (isset($_GET['allorder']))
                                $ordok = $_GET['allorder'];
                            else
                                $ordok = 4;
                            if ($curent2 != $i2)
                                echo'<a href="' . base_url() . 'home/cshop?allorder=' . $ordok . '&billpage=' . $i2 . '#bill">' . $i2 . '</a>';
                            else
                                echo'<span class="active">' . $i2 . '</span>';
                        }

                        if ($paging_order['num_page'] > 1 && isset($ord) && count($ord)) {//neu can hien thi so trang
                            $first = 1;
                            $total = $paging_order['num_page'];
                            $prev = $paging_order['page'] - 1;
                            $next = $paging_order['page'] + 1;
                            $curent = ($paging_order['start'] / $paging_order['display']) + 1;
                            if ($curent != 1) {// neu la trang dau tien thi khong co nut prev
                                echo '<a href="' . base_url() . 'home/cshop?allorder=' . $ordok . '&billpage=' . $first . '#bill">first</a>';
                                echo '<a href="' . base_url() . 'home/cshop?allorder=' . $ordok . '&billpage=' . $prev . '#bill">prev</a>';
                                if ($curent >= 6 && $total > 9) {
                                    echo '<span style="background=white; ">.....</span>';
                                }
                            }
                            //hien thi so trang
                            for ($i = 1; $i <= $paging_order['num_page']; $i++) {

                                if ($total > 9) {//neu tong so trang lon hon 9
                                    if ($curent <= 5) {
                                        showpagingshop2($curent, $i);
                                        if ($i == 9)
                                            break;
                                    }
                                    elseif ($curent >= 6 && $curent <= ($total - 5)) {
                                        if ($i >= ($curent - 4) && $i <= $curent + 4) {
                                            showpagingshop2($curent, $i);
                                            if ($i == $curent + 4)
                                                break;
                                        }
                                    }
                                    elseif ($curent >= ($total - 4)) {
                                        if ($i >= ($total - 8))
                                            showpagingshop2($curent, $i);
                                    }
                                }
                                else {
                                    showpagingshop2($curent, $i);
                                }
                            }
                            if ($curent != $total) {// neu la trang cuoi cung thi khong co nut next
                                if ($curent <= ($total - 5) && $total > 9)
                                    echo '<span style="background=white; ">.....</span>';
                                echo '<a href="' . base_url() . 'home/cshop?allorder=' . $ordok . '&billpage=' . $next . '#bill">next</a>';
                                echo '<a href="' . base_url() . 'home/cshop?allorder=' . $ordok . '&billpage=' . $total . '#bill">last</a>';
                            }
                        }
                        ?>

                    </div>
                </section><!-- #End pagination-->
            </div><!----End #bill-->

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
                    <th>Số tiền nạp (VNĐ)</th>
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
                            <td colspan="4"><b><span style="float:right">Tổng số tiền đã nạp : </span></b></td>
                            <td><b style="color: red"><?php echo number_format($tong, 2, ', ', '.') ?>  VNĐ</b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> <!--End #tabs-->
</div><!-- End Primary -->
