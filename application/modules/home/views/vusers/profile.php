
<!---hàm validate--->
<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $('#datePicker').datepick({
            defaultDate: '26/08/1992',
            yearRange: '1940:2014',
            maxDate: '2014',
            showTrigger: '<button type="button" class="trigger">' + '<img src="<?php echo base_url(); ?>template/images/calendar-green.gif" alt="Popup"></button>',
            renderer: $.extend({}, $.datepick.defaultRenderer,
                    {picker: $.datepick.defaultRenderer.picker.
                                replace(/\{link:clear\}/, '{button:clear}').
                                replace(/\{link:close\}/, '{button:close}')}),
        });

    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $.h5Validate.addPatterns({
            day_vn: /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/
        });
        $(".form").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".form").submit(function(evt) {
            if ($(".form_info").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if ($(".form_pass").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            var x = document.forms["form_pass"]["new_pass"].value;
            var y = document.forms["form_pass"]["re_new_pass"].value;
            if (x !== y) {
                evt.preventDefault();
                document.getElementById("re_new_pass").focus();
                alert('nhap lai mat khau!');
            }
        });
        $('#tab-container').easytabs();
    });
</script>
<section id="content" class="wrap">
    <div id="primary">
        <div id="tab-container" class='tab-container marginBottom_15'>
            <ul class='etabs'>
                <li class='tab active' ><a href="#profile">Thông tin người dùng</a></li>
                <li class='tab'><a href="#messages"><?php echo (isset($num_message) && $num_message > 0) ? '<span>' . $num_message . '</span>' : ''; ?>Tin nhắn</a></li>
                <?php
                if ($level['levelID'] == 2) {
                    echo '<li class="tab"><a href="#products">Quản lý sản phẩm</a></li>
                        <li class="tab"><a href="#bill"><span>' . $num_order . '</span>Quản lý đơn hàng</a></li>';
                }
                else
                    echo '<li class="tab"><a href="#upgrade">Nâng cấp lên gian hàng</a></li>';
                ?>
                <li class='tab'><a href="#history">Lịch sử</a></li>
                <li class='tab'><a href="#monney">Nạp tiền</a></li>
            </ul>
            <div class='panel-container'>

                <!--start profile-->
                <div id="profile">
                    <div class="change">
                        <h6 class="title_detail_item">profile <span class="onclick">[ Sửa ]</span> </h6>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Họ và tên</td>
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
                        <form class="form change_open" id="form_info" method="post" name="form_info" action="">
                            <!--<input type="number" name="quantity" min="1" max="5">-->
                            <div class="position">
                                <label>Họ<span>*</span></label>
                                <input type="text" required="" name="first_name" value="<?php echo $profile['firstname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tên<span>*</span></label>
                                <input type="text" required="" name="last_name" value="<?php echo $profile['lastname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div class="clearfix">
                                <label>Ngày sinh<span>*</span></label>
                                <input type="date" id="datePicker" required="" class="h5-day_vn"  name="birthday" value="<?php echo $profile['birthofday']; ?>" placeholder="dd/mm/yyyy" title="dd/mm/yyyy"
                                       style="
                                       height: 15px;
                                       font: -webkit-small-control;
                                       background: #e5e6e6;
                                       width: 290px;
                                       padding: 10px 8px;
                                       color: #272727;
                                       border: 0 none;
                                       border-radius: 3px;
                                       "/></p>
                                <span class="tooltip">Định dạng: ngày/tháng/năm</span>
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

                                <span class="tooltip">Phải điền số</span>
                            </div>
                            <div>
                                <label>Địa chỉ<span>*</span></label>
                                <input type="text" required="" name="address" value="<?php echo $profile['address']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tỉnh/Thành phố<span>*</span></label>
                                <div class="select width70">
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
                                <button class="btn" style="margin-left: 20px;">CANCEL</button>
                            </div>
                        </form>
                    </div>

                    <div class="change">
                        <h6 class="title_detail_item">Account<span class="onclick">[ Sửa ]</span> </h6>
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

                        <form class="form change_open" action="" method="post" name="form_pass" id="form_pass">
                            <div>
                                <label>Mật khẩu cũ<span>*</span></label>
                                <input type="password" required="" name="old_pass" id="old_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Nhập lại mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="re_new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>

                            <div>
                                <label></label>
                                <input type="submit" id="save_pass" name="save_pass" value="SAVE"/>
                                <button class="btn" style="margin-left: 20px;">CANCEL</button>
                            </div>
                        </form>
                    </div><!--end change-->


                </div> <!--End #profile-->

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
                                        echo '<a href="' . base_url() . 'index.php/home/cusers/profile?messageid=' . $value->messageID . '#messages">
                                            <li';
                                        echo (isset($Message_status_link) && $Message_status_link == TRUE && $_GET['messageid'] == $value->messageID) ? ' class="active"' : '';
                                        echo'>
                                                <div class="listitem clearfix">
                                                    <figure class="img_post">
                                                        <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                                    </figure>
                                                <div class="listitem_ct">';

                                        echo ($value->status == 0) ? '<b><span class="name_user">' . $value->ho_nguoi_gui . $value->ten_nguoi_gui . '</span>
                                                    <span class="title_post2" style=" color: rgb(105, 71, 194);">' . $value->title . '</span></b>' :
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
                        <div class="col_2 detail_content_3">
                            <script type="text/javascript" src="<?php echo base_url() ?>tinymce/tiny_mce.js"></script>
                            <script type="text/javascript">
                                tinyMCE.init({
                                    // General options 
                                    mode: "textareas", //textareas, exact 
                                    theme: "advanced",
                                    plugins: "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,imagemanager",
                                    // Theme options 
                                    theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
                                    theme_advanced_buttons2: "bullist,numlist,|,outdent,indent,blockquote,|link,unlink,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                                    theme_advanced_buttons3: "|,sub,sup,|,charmap,emotions,iespell",
                                    theme_advanced_toolbar_location: "top",
                                    theme_advanced_toolbar_align: "left",
                                    theme_advanced_statusbar_location: "bottom",
                                    theme_advanced_resizing: true
                                });
                            </script>

                            <?php
                            if (isset($message_detail) && count($message_detail))
                                echo ' 
                                        <ul class="scroll scroll_2">
                                            <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">' . $message_detail['ho_nguoi_gui'] . $message_detail['ten_nguoi_gui'] . '</a>
                                        <p>' . $message_detail['content'] . '</p>
                                        <time>' . $message_detail['datetime'] . '</time>
                                    </div>
                                </li>
                                        
                            </ul>

                            <form method="post" name="message" action="">
                                <div class="post_content">
                                    <div>
                                        <span>Tiêu đề:</span></br>
                                        <input type="text" name="title_message" value="Reply: ' . $message_detail['title'] . '"/>
                                    </div>
                                    <div>
                                        <span>Nội dung:</span>
                                        <textarea class="content_add" name="content_message"></textarea>       
                                    </div>
                                    <div>
                                        <input type="submit" class="btn" name="send_message" value="Send"/>
                                    </div>
                                </div>
                            </form>
                        
                        ';
                            ?>
                        </div>
                    </div>
                </div><!--End #messages-->

                <!--start products-->
                <?php
                if ($level['levelID'] == 2) {//nếu không phải nhà cung cấp thì không hiển thị nội dung quản lý sản phẩm
                    //và nội dung quản lý đơn hàng   
                    echo '                   
                <div id="products">
                    <div style="
                    border-bottom: 1px solid #DDD;
                    height: 40px;
                    margin-top: 0px;">
                        <h6 class="title_detail_item" style="float:left">order</h6>
                        <a href="' . base_url() . 'index.php/home/cproducts/upproducts" class="btn btn-warning" style="float:right; margin-top:-15px; background:#35C72F" >Thêm sản phẩm mới</a>
                    </div>
                    <table class="oder_table">';
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
                                <td><?php echo date('d/m/Y', $pro->create_date); ?></td>
                                <td><a href="#"><?php echo $pro->name; ?></a></td>
                                <td><?php echo $pro->date_expiration; ?></td>
                                <td><?php echo $pro->soldnumber; ?></td>
                                <td style="width:100px">
                                    <form method="get" action="">
                                        <input type="submit" name="change_status" value="edit" style="width: 30px;height: 20px;padding: 0px;"/>
                                        <input type="hidden" value="<?php echo $pro->productsID ?>" name="proID"/>
                                        <select class="form-control floatLeft" name="status_pro">

                                            <?php
                                            // echo '<option value="'.$pro->status.'"></option>';
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
                                            ?>
                                        </select>
                                    </form>
                                </td>
                                <td class="update">
                                    <ul>
                                        <li><a href="#">Gia hạn</a></li>
                                        <li><a href="#">Sửa</a></li>
                                        <li><a href="#">Xóa</a></li>
                                    </ul>

                                </td>

                            </tr>
                            <?php
                        }
                    }
                    else
                        echo 'Không có nội dung hiển thị';

                    echo '</table>
                    <section class="pagination">
                        <div>';

                    function showpaging($curent1, $i1) {
                        if ($curent1 != $i1)
                            echo'<a href="' . base_url() . 'index.php/home/cusers/profile?sppage=' . $i1 . '#products">' . $i1 . '</a>';
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
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $first . '#products">first</a>';
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $prev . '#products">prev</a>';
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
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $next . '#products">next</a>';
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $total . '#products">last</a>';
                        }
                    }
                    echo '
                        </div>
                    </section><!-- #End pagination-->
                    </div><!--End #products-->';


                    echo '
            <!--start Bill-->
            <div id="bill">
                <h6 class="title_detail_item">order</h6>
                <table class="oder_table">
                    ';

                    if (isset($order) && count($order)) {
                        echo '
                        <tr>
                        <th>#</th>
                        <th>Ngày đặt</th>
                        <th>Tên sản phẩm</th>
                        <th>Người mua</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                    </tr>';
                        $i = $paging_order['start'];
                        foreach ($order as $value => $ord) {
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
                                <td><?php echo $ord->date_cr; ?></td>
                                <td><a href="#"><?php // echo $pro->name;                 ?></a></td>
                                <td><?php echo $ord->buyerID; ?></td>
                                <td class="update">10000vnd</td>
                                <td>
                                    <span class="bg_gray">Đã bán</span>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                        echo 'Không có nội dung hiển thị';

                    echo '</table>
                    <section class="pagination">
                        <div>';

                    function showpaging2($curent2, $i2) {
                        if ($curent2 != $i2)
                            echo'<a href="' . base_url() . 'index.php/home/cusers/profile?billpage=' . $i2 . '#bill">' . $i2 . '</a>';
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
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $first . '#bill">first</a>';
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $prev . '#bill">prev</a>';
                            if ($curent >= 6 && $total > 9) {
                                echo '<span style="background=white; ">.....</span>';
                            }
                        }
                        //hien thi so trang
                        for ($i = 1; $i <= $paging_order['num_page']; $i++) {

                            if ($total > 9) {//neu tong so trang lon hon 9
                                if ($curent <= 5) {
                                    showpaging2($curent, $i);
                                    if ($i == 9)
                                        break;
                                }
                                elseif ($curent >= 6 && $curent <= ($total - 5)) {
                                    if ($i >= ($curent - 4) && $i <= $curent + 4) {
                                        showpaging2($curent, $i);
                                        if ($i == $curent + 4)
                                            break;
                                    }
                                }
                                elseif ($curent >= ($total - 4)) {
                                    if ($i >= ($total - 8))
                                        showpaging2($curent, $i);
                                }
                            }
                            else {
                                showpaging2($curent, $i);
                            }
                        }
                        if ($curent != $total) {// neu la trang cuoi cung thi khong co nut next
                            if ($curent <= ($total - 5) && $total > 9)
                                echo '<span style="background=white; ">.....</span>';
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $next . '#bill">next</a>';
                            echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $total . '#bill">last</a>';
                        }
                    }

                    echo '</div>
                    </section><!-- #End pagination-->
                    </div><!----End #bill-->
                ';
                }
                ?>
                <div id="history">
                    <h6 class="title_detail_item">order</h6>
                    <table class="oder_table">
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Ngày đặt</th>
                            <th>Tên sản phẩm</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#"><img src="uploads/product_1.png"/></a></td>
                            <td>12/12/2014</td>
                            <td><a href="#">Sản phẩm 1</a></td>
                            <td>100.000VND</td>
                            <td>
                                <span class="bg_gray">Đã bán</span>
                            </td>
                        </tr>
                    </table>
                    <section class="pagination">
                        <div class="paginationControl clearfix">
                            <a href="#"></a>
                            <span class="active">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"></a>
                        </div>
                    </section><!-- #End pagination-->
                </div><!--End #history-->


                <div id="monney">
                    <p>
                        form nạp tiền
                    </p>
                </div>
            </div>
        </div> <!--End #tabs-->
    </div><!-- End Primary -->
