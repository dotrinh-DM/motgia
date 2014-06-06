
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

        $(".form").submit(function(evt) {

            var x = document.forms["form_pass"]["new_pass"].value;
            var y = document.forms["form_pass"]["re_new_pass"].value;
            if (x !== y) {
                alert('Yêu cầu nhập lại mật khẩu!');
                document.getElementById("renew").focus();
                evt.preventDefault();
            }

            if ($(".form_info").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if ($(".form_pass").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
        });
            $('#tab-container').easytabs();

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
                        <input type="submit" id="'+oid+'" class="btn order_ok" value="ok" style="margin-top: -8px;width: 80px;padding: 10px;"/></form>');
                popupshow();
                return false;
            });
            
            $('.order_ok').live("click", function(e) {
                var orderID = $(this).attr('id');
                var statusID = $('.statusid'+orderID).val();
                var note = $("#note").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cusers/cancel_order')?>",
                    data: {"oid": orderID, "statusID": statusID, "note": note},
                    success: function(html) {
                        location.reload(true);
                    }
            });
        });
    });
</script>
<script type="text/javascript" src="<?php echo base_url() ?>tinymce/tiny_mce.js"></script>
<!--<script type="text/javascript">
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
        theme_advanced_resizing: true
    });
</script>-->
<div id="boxes">
    <div style="top: 199.5px; left: 551.5px; display: none; border: 1px solid;border-radius: 14px;" id="dialog" class="window">
        <div style="width: 45px;height: 45px;float: left;margin: -25px -15px;">
            <img src="<?php echo base_url()?>public/icons/pin_icon.png" style="width: 41px;">
        </div> 
        <div style="float: left;margin-left: 20px;width: 310px;">
            <center>
                <span class="headermess" style="float: left;width: 100%;padding: 0px 25px;font-size: 13pt;font-weight: bold;color: #467259;"></span>
            </center>
        </div>
        <div style="float: right;">
            <a href="#" class="close"><img src="<?php echo base_url()?>public/icons/del.png" style="width: 35px;margin: -14px -12px 0px 0px;float: right;"></a>
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
                if ($level['levelID'] == 2) {
                    echo '<li class="tab"><a href="#products">Quản lý sản phẩm</a></li>
                        <li class="tab"><a href="#bill"';
                    echo (isset($num_order) && $num_order > 0) ? 'tile="có ' . $num_order . ' đơn hàng chưa xử lý"><span>' . $num_order . '</span> ' : '>';
                    echo 'Đơn hàng đã nhận</a></li>';
                }
                else
                    echo '<li class="tab"><a href="#upgrade">Nâng cấp lên gian hàng</a></li>';
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
                        <div class="form change_open">
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
                        <div class="form change_open">
                            <form class="form change_open" action="" method="post" name="form_pass" id="form_pass">
                                <div>
                                    <label>Mật khẩu cũ<span>*</span></label>
                                    <input type="password" required="" name="old_pass"/>
                                    <span class="tooltip">không được để trống</span>
                                </div>
                                <div>
                                    <label>Mật khẩu mới<span>*</span></label>
                                    <input type="password" required="" name="new_pass"/>
                                    <span class="tooltip">không được để trống</span>
                                </div>
                                <div>
                                    <label>Nhập lại mật khẩu mới<span>*</span></label>
                                    <input type="password" required="" name="re_new_pass" id="renew"/>
                                    <span class="tooltip">không được để trống</span>
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

                <!--start products-->
                <?php
                if ($level['levelID'] == 2) {//nếu không phải nhà cung cấp thì không hiển thị nội dung quản lý sản phẩm
                    //và nội dung quản lý đơn hàng   
                    echo '                   
                <div id="products">
                    <div style="
                    border-bottom: 1px solid #DDD;
                    height: 40px;
                    margin-top: 15px;">
                        <h6 class="title_detail_item" style="float:left">order</h6>
                        <a href="' . base_url() . 'up-product" class="btn btn-warning" style="float:right; margin-top:-15px; background:#35C72F" >Thêm sản phẩm mới</a>
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
                            <th>Thao tác xử lý</th>
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
                                    <input type="submit" class="edit_status_product" id="<?php echo $pro->productsID ?>" name="change_status" value="Edit" style="width: 30px;height: 32px;padding: 0px;float: right;margin-top: 0px;border-radius: 0px 5px 5px 0px;"/>
                                    <input type="hidden" value="<?php echo $pro->productsID ?>" name="proID"/>
                                    <select class="form-control floatLeft" id="status_product<?php echo $pro->productsID ?>" name="status_pro" style="width: 120px;">
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
                                        ?>
                                    </select>
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
                            echo'<a href="' . base_url() . 'profile?sppage=' . $i1 . '#products">' . $i1 . '</a>';
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
                            echo '<a href="' . base_url() . 'profile?sppage=' . $first . '#products">first</a>';
                            echo '<a href="' . base_url() . 'profile?sppage=' . $prev . '#products">prev</a>';
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
                            echo '<a href="' . base_url() . 'profile?sppage=' . $next . '#products">next</a>';
                            echo '<a href="' . base_url() . 'profile?sppage=' . $total . '#products">last</a>';
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
                                        echo '<p style="color:#7769AD"><b>' . $userbuy['fullname'] .'</b> (thành viên)</p>';
                                        echo '<p>Năm sinh: ' . $userbuy['buyeryear'] . '</p>';
                                        echo '<p>Địa chỉ: ' . $userbuy['buyeradd'] . '</p>';
                                        echo '<p>SĐT: ' . $userbuy['buyerphone'] . ' ... ';
                                    }else if (substr($ord->buyerID, 0, 5) == 'GUEST') {//đối với khach hang vang lai
                                        $this->load->model('Musers');
                                        $userbuy = $this->Musers->getOrder_GuestBuy($ord->orderID, $ord->buyerID);
                                        echo '<p style="color:#7769AD"><b>' . $userbuy['fullname'] . '</b> (khách vãng lai)</p>';
                                        echo '<p>Email: ' . $userbuy['buyeremail'] . '</p>';
                                        echo '<p>Địa chỉ: ' . $userbuy['buyeradd'] .'</p>';
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
                                    <p>Hình thức thanh toán: <?php echo ($ord->method == 1) ? 'online' : 'tại nhà'  ?></p>
                                    <a href="<?php echo site_url('home/cusers/orderdetail') . '?orderid=' . $ord->orderID.'&buyer='.$ord->buyerID; ?>">> <b>Chi tiết</b></a>
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
                                <input type="hidden" class="orderid'.$ord->orderID.'" value="' . $ord->orderID . '"/>
                                <input type="hidden" class="statusid'.$ord->orderID.'" value="' . $ord->statusID . '"/>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 75px; float:left;
                            font-size: 9pt;
                            padding: 5px;
                            margin-top: 0px;
                            border-radius: 3px;
                            background-color: #CEB711; 
                            " value="Xác nhận" name="confirm_order" onclick="return confirm(' . "'" . 'Bạn muốn xác nhận đơn hàng này và gửi tin nhắn hệ thống đến tài khoản khách hàng?' . "'" . ');"/>
                            <input type="submit" id="'.$ord->orderID.'" class="btn btn-primary btn-lg btn-block cancel_order" style="
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
                        echo 'Không có nội dung hiển thị';

                    echo '</table>
                    <section class="pagination">
                        <div>';

                    function showpaging2($curent2, $i2) {
                        if ($curent2 != $i2)
                            echo'<a href="' . base_url() . 'profile?billpage=' . $i2 . '#bill">' . $i2 . '</a>';
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
                            echo '<a href="' . base_url() . 'profile?billpage=' . $first . '#bill">first</a>';
                            echo '<a href="' . base_url() . 'profile?billpage=' . $prev . '#bill">prev</a>';
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
                            echo '<a href="' . base_url() . 'profile?billpage=' . $next . '#bill">next</a>';
                            echo '<a href="' . base_url() . 'profile?billpage=' . $total . '#bill">last</a>';
                        }
                    }

                    echo '</div>
                    </section><!-- #End pagination-->
                    </div><!----End #bill-->
                ';
                }
                ?>

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
                                echo '<p style="color:#7769AD"><b>' . $ord->sellerfname . ' ' . $ord->sellerlname . '</b></p>';
                                echo '<p>Năm sinh: ' . $ord->selleryear . '</p>';
                                echo '<p>Địa chỉ: ' . $ord->selleradd . '</p>';
                                echo '<p>SĐT: ' . $ord->sellerphone . ' ... ';
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
                                <p>Hình thức thanh toán: online</p>
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
                    echo 'Không có nội dung hiển thị';

                echo '</table>
                    <section class="pagination">
                        <div>';

                function showpaging3($curent3, $i3) {
                    if ($curent3 != $i3)
                        echo'<a href="' . base_url() . 'profile?hspage=' . $i3 . '#bill">' . $i3 . '</a>';
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
                        echo '<a href="' . base_url() . 'profile?hspage=' . $first . '#bill">first</a>';
                        echo '<a href="' . base_url() . 'profile?hspage=' . $prev . '#bill">prev</a>';
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
                        echo '<a href="' . base_url() . 'profile?hspage=' . $next . '#bill">next</a>';
                        echo '<a href="' . base_url() . 'profile?hspage=' . $total . '#bill">last</a>';
                    }
                }

                echo '</div>
                    </section><!-- #End pagination-->
                    </div><!----End #history-->
                ';
                ?>
                <div id="monney">
                </div>
            </div>
        </div> <!--End #tabs-->
    </div><!-- End Primary -->
